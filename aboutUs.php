<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'P. Staats',
        'pagetitle' => 'Ons menu'
    ];
    
    loadView('header', $metaData) 
?>
<main>
    <section>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa vero, 
            omnis ad commodi, debitis vel dolorum, expedita eaque corporis magnam neque et tenetur! 
            Deleniti perferendis ea dolores voluptates culpa sint.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Eius obcaecati dolor modi tempore doloremque perspiciatis aliquid amet voluptate reprehenderit hic architecto ea ad est, eos, 
            expedita molestias tempora? Cum, architecto!
        </p>
        <article class="sec-one-art">
            <img src="https://picsum.photos/620/450" alt="dummy foto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Enim libero vel officia in recusandae blanditiis ipsa debitis accusamus nulla distinctio, 
                iure eligendi est hic unde mollitia laborum sunt necessitatibus architecto?
            </p>
        </article>
    </section>
    <section>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa vero, 
            omnis ad commodi, debitis vel dolorum, expedita eaque corporis magnam neque et tenetur! 
            Deleniti perferendis ea dolores voluptates culpa sint.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Eius obcaecati dolor modi tempore doloremque perspiciatis aliquid amet voluptate reprehenderit hic architecto ea ad est, eos, 
            expedita molestias tempora? Cum, architecto!
        </p>
        <article class="sec-two-art">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Aperiam nisi hic id impedit nostrum beatae temporibus esse aspernatur incidunt velit nemo 
                dignissimos vel molestiae sed voluptate, illum adipisci. Soluta, iure!
            </p>
            <img src="https://picsum.photos/620/450" alt="">
        </article>
    </section>
    <section>
        <video controls>
            <source src="./documents/media/pexels-rafa-20073998.mp4" type="video/mp4">
            <p>Je browser ondersteunt HTML video niet</p>
        </video>
    </section>
</main>
<?php
    loadView('footer')
?>