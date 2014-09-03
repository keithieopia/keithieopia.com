<?php
	$visitors_total  = read_flatfile('content/db/visitors/total.dat');
	$visitors_unique = read_flatfile('content/db/visitors/unique.dat');
	$visitors_online = count(read_flatfile('content/db/visitors/online.dat')); 
?>

<div class="widget">
    <section>
        <h1>Visitors</h1>
        <ul>
            <li><?php echo $visitors_online; ?> visitors online</li>
            <li><?php echo $visitors_total; ?> total visits</li>
            <li><?php echo $visitors_unique; ?> unique visitors</li>
        </ul>
    </section>
</div>
