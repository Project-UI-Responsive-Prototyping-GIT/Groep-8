<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'S. Stikkelorum',
        'pagetitle' => 'HOME'
    ];
    
    loadView('header', $metaData);

    include 'includes/layout/floating_button.php';
?>
<main>
    <img class="home-main-img" src="./images/Banner Home.jpg">
    <section id="alineasOnderBanner">
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum dolor sit amet consectetur adipiscing. Neque aliquam vestibulum morbi blandit cursus risus. Sit amet mattis vulputate enim nulla aliquet porttitor lacus. Donec et odio pellentesque diam. Sed enim ut sem viverra. Enim nec dui nunc mattis enim. Molestie nunc non blandit massa enim nec dui nunc. Faucibus pulvinar elementum integer enim neque volutpat. Tortor posuere ac ut consequat semper viverra.</p>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum dolor sit amet consectetur adipiscing. Neque aliquam vestibulum morbi blandit cursus risus. Sit amet mattis vulputate enim nulla aliquet porttitor lacus. Donec et odio pellentesque diam. Sed enim ut sem viverra. Enim nec dui nunc mattis enim. Molestie nunc non blandit massa enim nec dui nunc. Faucibus pulvinar elementum integer enim neque volutpat. Tortor posuere ac ut consequat semper viverra.</p>
    </section>
    <section id="fotoEnAlinea3">
        <img src="./images/image 6.png">
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum dolor sit amet consectetur adipiscing. Neque aliquam vestibulum morbi blandit cursus risus. Sit amet mattis vulputate enim nulla aliquet porttitor lacus. Donec et odio pellentesque diam. Sed enim ut sem viverra. Enim nec dui nunc mattis enim. Molestie nunc non blandit massa enim nec dui nunc. Faucibus pulvinar elementum integer enim neque volutpat. Tortor posuere ac ut consequat semper viverra.</p>

    </section>
    <article id="tekstOnderFoto">
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum dolor sit amet consectetur adipiscing. Neque aliquam vestibulum morbi blandit cursus risus. Sit amet mattis vulputate enim nulla aliquet porttitor lacus. Donec et odio pellentesque diam. Sed enim ut sem viverra. Enim nec dui nunc mattis enim. Molestie nunc non blandit massa enim nec dui nunc. Faucibus pulvinar elementum integer enim neque volutpat. Tortor posuere ac ut consequat semper viverra.</p>

    </article>
</main>
<?php
    loadView('footer')
?>