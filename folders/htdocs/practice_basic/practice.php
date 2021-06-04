One aspect of PHP that you need to be careful of, is that ?> will drop you out of PHP code and into HTML even if it
appears inside a // comment. (This does not apply to /* */ comments.) This can lead to unexpected results. For example,
take this line:

<?php
  $file_contents  = '<?php die(); ?>' . "\n";
?>

If you try to remove it by turning it into a comment, you get this:

<?php
//  $file_contents  = '<?php die(); ?>' . "\n";
?>

Which results in ' . "\n"; (and whatever is in the lines following it) to be output to your HTML page.

The cure is to either comment it out using /* */ tags, or re-write the line as:

<?php
  $file_contents  = '<' . '?php die(); ?' . '>' . "\n";
?>
up
down
5davidhcefx ¶7 months ago
When the PHP interpreter hits the ?> closing tags, it WON'T output right away if it's inside of a conditional statement:
(no matter if it's an Alternative Syntax or not)

<html>
<?php
$a = 1;
$b = 2;
if ($a === 1) {
    if ($b == 2) {
        ?>

<head></head><?php
    } else {
        ?>

<body></body><?php
    }
}
?>

</html>

This would output `<html>

<head></head>

</html>`.
Aside from conditional statements, the PHP interpreter also skip over functions! What a surprise!

<html>
<?php
function show($a) {
    ?>
<a href="https://www.<?php echo $a ?>.com">
    Link
</a>
<?php
}
?>

<body>
    <?php show("google") ?>
</body>

</html>

This gives `<html>

<body><a href="https://www.google.com">Link</a></body>

</html>`.
These really confused me, because at first I thought it would output any HTML code right away, except for Alternative
Syntaxes (https://www.php.net/manual/en/control-structures.alternative-syntax.php). There are more strange cases than I
thought.