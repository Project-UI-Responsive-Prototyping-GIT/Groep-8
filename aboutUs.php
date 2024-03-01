<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'P. Staats',
        'pagetitle' => 'Ons menu'
    ];
    
    loadView('header', $metaData) 
?>
<main class="aboutUs-container">
    <h1>About us</h1>
    <section>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa vero, 
            omnis ad commodi, debitis vel dolorum, expedita eaque corporis magnam neque et tenetur! 
            Deleniti perferendis ea dolores voluptates culpa sint.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Eius obcaecati dolor modi tempore doloremque perspiciatis aliquid amet voluptate reprehenderit hic architecto ea ad est, eos, 
            expedita molestias tempora? Cum, architecto!
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa vero, 
            omnis ad commodi, debitis vel dolorum, expedita eaque corporis magnam neque et tenetur! 
            Deleniti perferendis ea dolores voluptates culpa sint.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Eius obcaecati dolor modi tempore doloremque perspiciatis aliquid amet voluptate reprehenderit hic architecto ea ad est, eos, 
            expedita molestias tempora? Cum, architecto!
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa vero, 
            omnis ad commodi, debitis vel dolorum, expedita eaque corporis magnam neque et tenetur! 
            Deleniti perferendis ea dolores voluptates culpa sint.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Eius obcaecati dolor modi tempore doloremque perspiciatis aliquid amet voluptate reprehenderit hic architecto ea ad est, eos, 
            expedita molestias tempora? Cum, architecto!
        </p>
        <article class="sec-one-art">
            <img src="https://picsum.photos/620/450" alt="dummy foto">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Enim libero vel officia in recusandae blanditiis ipsa debitis accusamus nulla distinctio, 
                iure eligendi est hic unde mollitia laborum sunt necessitatibus architecto?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptates beatae iste tempore 
                architecto nisi incidunt itaque dolorum quis. Repellendus iste enim provident odio explicabo nihil 
                sed voluptates sapiente at?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Enim libero vel officia in recusandae blanditiis ipsa debitis accusamus nulla distinctio, 
                iure eligendi est hic unde mollitia laborum sunt necessitatibus architecto?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptates beatae iste tempore 
                architecto nisi incidunt itaque dolorum quis. Repellendus iste enim provident odio explicabo nihil 
                sed voluptates sapiente at?
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
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa vero, 
            omnis ad commodi, debitis vel dolorum, expedita eaque corporis magnam neque et tenetur! 
            Deleniti perferendis ea dolores voluptates culpa sint.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Eius obcaecati dolor modi tempore doloremque perspiciatis aliquid amet voluptate reprehenderit hic architecto ea ad est, eos, 
            expedita molestias tempora? Cum, architecto!
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa vero, 
            omnis ad commodi, debitis vel dolorum, expedita eaque corporis magnam neque et tenetur! 
            Deleniti perferendis ea dolores voluptates culpa sint.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Eius obcaecati dolor modi tempore doloremque perspiciatis aliquid amet voluptate reprehenderit hic architecto ea ad est, eos, 
            expedita molestias tempora? Cum, architecto!
        </p>
        <article class="sec-two-art">
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Enim libero vel officia in recusandae blanditiis ipsa debitis accusamus nulla distinctio, 
                iure eligendi est hic unde mollitia laborum sunt necessitatibus architecto?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptates beatae iste tempore 
                architecto nisi incidunt itaque dolorum quis. Repellendus iste enim provident odio explicabo nihil 
                sed voluptates sapiente at?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Enim libero vel officia in recusandae blanditiis ipsa debitis accusamus nulla distinctio, 
                iure eligendi est hic unde mollitia laborum sunt necessitatibus architecto?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptates beatae iste tempore 
                architecto nisi incidunt itaque dolorum quis. Repellendus iste enim provident odio explicabo nihil 
                sed voluptates sapiente at?
            </p>
            <img src="https://picsum.photos/620/450" alt="dummy foto">
        </article>
    </section>
    <section>
        <video controls width="100%"> <!-- width="1080" -->
            <source src="./documents/media/pexels-rafa-20073998.mp4" type="video/mp4">
            <p>Je browser ondersteunt HTML video niet</p>
        </video>
    </section>
</main>
<?php
    loadView('footer')
?>