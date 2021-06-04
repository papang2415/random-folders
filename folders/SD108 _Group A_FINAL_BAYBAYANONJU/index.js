let playerTurn = true;
let win = false;
let player = document.getElementById('player');
let store = {
    Player1:[],
    Player2: []
};


window.onload = () => {
    let refreshBtn = document.getElementById('reset');
    refreshBtn.addEventListener('click', resetGame)
    player.innerText = "Player 1's turn";

    let cells = document.getElementsByClassName('cell');

    for(cell of cells) {
        cell.addEventListener('click', cellClicked);
    }
}

function cellClicked(event) {
    // console.log((playerTurn)?"Player1": "Player2");
    let cell = event.target;
    let id = event.target.id;

    if(playerTurn) {
        console.log("Player1");
        cell.style = "background-image: url('./img/X.png')" 
        player.innerText = "Player 2's turn";
        store.Player1.push(id);
        checkWinner(store.Player1, "Player1");
    }else {
        console.log("Player2");
        cell.style = "background-image: url('./img/O.png')"  
        player.innerText = "Player 1's turn";
        store.Player2.push(id);
        checkWinner(store.Player2, "Player2");
    }
    
    cell.removeEventListener('click', cellClicked);
    playerTurn = !playerTurn;

    //check if there is tie


}


function checkWinner(PlayerStore, PlayerName) {
    let winningCoordinates = [
        ["0","1","2"],//
        ["3","4","5"],// Horizontal
        ["6","7","8"],//
        
        ["0","3","6"],//
        ["1","4","7"],//Vertical
        ["2","5","8"],//
        
        ["0","4","8"],//diagonal
        ["2","4","6"],//
    ];

    for(coordinates of winningCoordinates)  {      
        if(PlayerStore.includes(coordinates[0]) &&
        PlayerStore.includes(coordinates[1]) &&
        PlayerStore.includes(coordinates[2])){
            player.innerHTML = `<h1> ${PlayerName} Wins</h1>`;
            disableCells();
            win = true;
            return;
        }
    }

    if(!win){
        let totalLength = store.Player1.length + store.Player2.length;
        if(totalLength > 8){
            player.innerHTML = "<h1>The Game is Tied</h1>";
            disableCells();
            return;
        }   
    } 


}

function disableCells() {
    let cells = document.getElementsByClassName('cell');
    for(cell of cells) {        
        cell.removeEventListener('click', cellClicked);
    }
}


function resetGame() {
    window.location.reload();
}