<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'P. Staats',
        'pagetitle' => 'Ons menu'
    ];
    
    loadView('header', $metaData);

    include 'includes/layout/floating_button.php';
?>
<main class="aboutUs-container">
    <h1>About us</h1>
    <section>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum dolor sit amet consectetur adipiscing. Neque aliquam vestibulum morbi blandit cursus risus. Sit amet mattis vulputate enim nulla aliquet porttitor lacus. Donec et odio pellentesque diam. Sed enim ut sem viverra. Enim nec dui nunc mattis enim. Molestie nunc non blandit massa enim nec dui nunc. Faucibus pulvinar elementum integer enim neque volutpat. Tortor posuere ac ut consequat semper viverra.
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
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum dolor sit amet consectetur adipiscing. Neque aliquam vestibulum morbi blandit cursus risus. Sit amet mattis vulputate enim nulla aliquet porttitor lacus. Donec et odio pellentesque diam. Sed enim ut sem viverra. Enim nec dui nunc mattis enim. Molestie nunc non blandit massa enim nec dui nunc. Faucibus pulvinar elementum integer enim neque volutpat. Tortor posuere ac ut consequat semper viverra.
        </p>
        <article class="sec-two-art">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum dolor sit amet consectetur adipiscing. Neque aliquam vestibulum morbi blandit cursus risus. Sit amet mattis vulputate enim nulla aliquet porttitor lacus. Donec et odio pellentesque diam. Sed enim ut sem viverra. Enim nec dui nunc mattis enim. Molestie nunc non blandit massa enim nec dui nunc. Faucibus pulvinar elementum integer enim neque volutpat. Tortor posuere ac ut consequat semper viverra.
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