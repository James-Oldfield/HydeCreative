<?php get_template_part( 'credit' ); ?>

<!--JavaScript-->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--B.S-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
var str = 
"<p>There are lots of monkeys on typewriters creating content for this site as we speak.</p>",
    i = 0,
    isTag,
    text; 

(function type() {
    text = str.slice(0, ++i);
    if (text === str) return;

    document.getElementById('type').innerHTML = text;

    var char = text.slice(-1);
    if( char === '<' ) isTag = true;
    if( char === '>' ) isTag = false;

    if (isTag) return type();
    setTimeout(type, 50);

}());
</script>

</body>
</html>