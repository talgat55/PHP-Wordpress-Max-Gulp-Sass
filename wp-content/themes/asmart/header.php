<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php
        if (is_home()) {
            bloginfo('name');
        } else {
            wp_title('');
        }
        ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap&subset=cyrillic" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/favicon.png?v=1.1') ?>"
          type="image/x-icon"/>

    <?php wp_head(); ?>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var myajax = {"url":"<?=admin_url('admin-ajax.php'); ?>"};
        /* ]]> */
    </script>
    <!--    <script type="application/ld+json">-->
    <!--        {-->
    <!--            "@context": "http://schema.org",-->
    <!--            "@type": "Organization",-->
    <!--            "address": {-->
    <!--                "@type": "PostalAddress",-->
    <!--                "addressRegion": "г. Омск",-->
    <!--                "streetAddress": "ул. Почтовая, д. 33, каб. 9"-->
    <!--            },-->
    <!--            "description": "Дизель Групп доставляет дизельное топливо по Омску и Омской области, напрямую от Газпрома и ВПК-ОЙЛ",-->
    <!--            "name": "Дизель Групп - дизельное топливо с доставкой по омску и области",-->
    <!--            "telephone": "8 91314-82-031"-->
    <!--        }-->
    <!--    </script>-->
</head>

<body <?php body_class(); ?>>
<div class="wrap ">
    <header class="header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a class="header-logo" href="<?php echo home_url(); ?>">
                    <svg width="230" height="30" viewBox="0 0 230 30" fill="none"  >
                        <path d="M4.63277 0.481756H10.7019L10.8638 0.932617L16.6395 16.1517L21.9399 3.1769C22.0006 3.02661 22.0613 2.87633 22.1119 2.73606C22.1625 2.59579 22.2333 2.38539 22.2838 2.21506C22.3445 2.00466 22.4052 1.8143 22.4457 1.63396C22.4861 1.45361 22.5367 1.24321 22.5772 1.05285L22.6884 0.501794H31.0639L29.0408 1.7642C28.883 1.86074 28.7456 1.98663 28.6362 2.13491C28.5208 2.28198 28.4412 2.4534 28.4036 2.63587C28.3345 2.88068 28.2971 3.13317 28.2923 3.3873C28.2823 3.7224 28.3026 4.05771 28.353 4.38921L30.376 20.8506C30.4122 21.1581 30.4696 21.4627 30.548 21.7624C30.6058 21.9712 30.6872 22.1728 30.7907 22.3635C30.8875 22.529 31.0066 22.6807 31.1448 22.8144C31.2874 22.9721 31.4507 23.1103 31.6303 23.2252L33.451 24.4776H22.9009L24.7722 23.2252C24.9557 23.1115 25.1196 22.9694 25.2577 22.8044C25.3882 22.6511 25.494 22.4787 25.5713 22.2934C25.666 22.023 25.7105 21.7379 25.7028 21.4518C25.7162 20.9095 25.6891 20.367 25.6219 19.8287L24.2765 7.37491L17.4993 24.3373L17.1453 25.239L16.3968 24.5978L15.537 23.8363C15.3309 23.6673 15.1412 23.4794 14.9705 23.2753C14.7862 23.0683 14.6235 22.8434 14.485 22.604C14.3252 22.3466 14.1833 22.0789 14.0602 21.8024C13.9084 21.4925 13.7733 21.1748 13.6556 20.8506L8.40575 7.35487L6.65582 20.0391C6.5729 20.5257 6.53229 21.0184 6.53444 21.5119C6.52607 21.7677 6.56727 22.0228 6.65582 22.2633C6.73996 22.4345 6.85283 22.5904 6.98962 22.7242C7.14786 22.8791 7.33286 23.0047 7.53584 23.0949L10.1759 24.3974H0L1.2644 23.2151C1.4732 23.029 1.6568 22.8168 1.81063 22.5839C1.9692 22.3573 2.10473 22.1157 2.21523 21.8626C2.33874 21.595 2.44681 21.3207 2.53892 21.041C2.63066 20.7111 2.70494 20.3767 2.76146 20.0391L4.96658 4.42929C5.02606 3.98418 5.05647 3.53572 5.05761 3.08673C5.06222 2.88266 5.03143 2.67933 4.96658 2.48558C4.90255 2.34957 4.8172 2.22446 4.7137 2.11487C4.57764 1.97064 4.42485 1.84285 4.25851 1.73415L2.3265 0.481756H4.63277ZM80.679 14.5586C91.7148 27.6937 101.82 30.6493 114.14 25.0987C102.386 34.3163 85.595 30.7495 73.5276 12.5548L73.4062 12.4446L73.123 12.0438L73.4062 11.6431L78.3323 4.87013C78.565 4.5395 78.7774 4.24895 78.9493 3.98845C79.067 3.80365 79.175 3.61304 79.273 3.41736C79.3384 3.28389 79.3958 3.14672 79.445 3.00657C79.4564 2.92011 79.4564 2.83254 79.445 2.74608C79.4605 2.67341 79.4605 2.59832 79.445 2.52566C79.4124 2.4297 79.3608 2.34114 79.2933 2.26516C79.232 2.16829 79.157 2.08057 79.0707 2.00466C78.9675 1.91986 78.8556 1.84598 78.7369 1.78424L76.2182 0.481756H86.4852L85.6658 1.57384L78.302 11.3425L80.679 14.5586ZM44.9419 0.481756H50.5761L50.7481 0.922597L58.3345 20.1894C58.4864 20.5835 58.6621 20.9683 58.8605 21.3416C59.0084 21.6192 59.1847 21.881 59.3865 22.1231C59.5684 22.3367 59.7717 22.5314 59.9934 22.7042C60.2137 22.8774 60.4509 23.0284 60.7015 23.155L63.21 24.4475H50.4649L53.378 23.135C53.5489 23.0655 53.7064 22.9672 53.8433 22.8444C53.9351 22.7605 54.0076 22.658 54.0558 22.5439C54.0999 22.4151 54.1171 22.2787 54.1063 22.1431C54.0872 21.9167 54.0361 21.6942 53.9546 21.4818L51.7495 15.8711H44.1226L42.312 20.5C42.1714 20.8209 42.0695 21.1572 42.0085 21.5019C41.9662 21.7169 41.9662 21.9381 42.0085 22.1531C42.0687 22.3441 42.161 22.5237 42.2816 22.6841C42.4308 22.8698 42.6043 23.0349 42.7975 23.1751L44.5373 24.4174H34.149L36.1114 23.155C36.3763 22.9898 36.6237 22.7984 36.8498 22.5839C37.0734 22.3655 37.2766 22.1274 37.4567 21.8726C37.6798 21.5534 37.8793 21.2185 38.0535 20.8707C38.2558 20.4599 38.4682 19.9589 38.6907 19.3979L45.0229 3.06669C45.0875 2.90289 45.1283 2.73086 45.1443 2.55571C45.1505 2.44324 45.1332 2.33069 45.0937 2.22508C45.061 2.14095 45.0091 2.06549 44.9419 2.00466C44.8529 1.91879 44.7504 1.84774 44.6385 1.79426L41.9478 0.481756H44.9419ZM47.9158 6.01231L45.5185 12.3344H50.3738L47.9158 6.01231ZM66.5885 0.481756H74.8527L73.1331 1.71411C72.926 1.86345 72.7361 2.0348 72.5666 2.22508C72.4311 2.38433 72.3157 2.55928 72.2227 2.74608C72.1308 2.96108 72.0662 3.18657 72.0305 3.41736C71.9766 3.74855 71.9529 4.08387 71.9597 4.41927V20.5501C71.946 20.8852 71.9664 21.2209 72.0204 21.552C72.056 21.7795 72.1206 22.0017 72.2126 22.2132C72.3056 22.4023 72.4248 22.5777 72.5666 22.7342C72.731 22.9199 72.9179 23.0848 73.123 23.2252L74.8527 24.4475H64.4947L66.1839 23.2051C66.3831 23.0687 66.5633 22.907 66.72 22.7242C66.859 22.5696 66.9717 22.3936 67.0538 22.2032C67.1542 21.9827 67.2256 21.7504 67.2663 21.5119C67.3219 21.1806 67.3523 20.8457 67.3573 20.51V4.39923C67.3509 4.08016 67.3205 3.762 67.2663 3.44742C67.2256 3.20892 67.1542 2.97658 67.0538 2.7561C66.9798 2.56718 66.8812 2.38867 66.7605 2.22508C66.5983 2.035 66.4151 1.8636 66.2143 1.71411L64.5857 0.481756H66.5885ZM109.072 1.5538V6.81384L107.94 6.01231C107.529 5.7224 107.096 5.46447 106.645 5.24084C106.177 5.00999 105.694 4.81245 105.198 4.64971C104.703 4.4684 104.192 4.33421 103.671 4.24895C103.147 4.15668 102.615 4.10975 102.083 4.10868C101.098 4.10025 100.121 4.27353 99.2 4.61965C98.2881 4.96932 97.4508 5.48596 96.7319 6.14256C96.0018 6.79894 95.4371 7.61561 95.0831 8.52711C94.6841 9.55573 94.4917 10.6516 94.5167 11.7533C94.4926 13.0347 94.6841 14.3112 95.0831 15.5305C95.4493 16.5928 96.0388 17.566 96.8128 18.3859C97.543 19.1784 98.4411 19.8011 99.4428 20.2094C100.525 20.6285 101.679 20.8361 102.841 20.8206C103.549 20.8222 104.255 20.7753 104.956 20.6803C105.587 20.5964 106.209 20.4589 106.817 20.2695C107.373 20.0968 107.909 19.865 108.415 19.5782C108.906 19.2902 109.367 18.9546 109.791 18.5763L112.421 16.2519L110.863 19.3878L108.718 23.7061L108.587 23.9766L108.304 24.0668C107.818 24.207 107.292 24.3373 106.888 24.4375C106.483 24.5377 105.977 24.6178 105.532 24.6779C105.087 24.738 104.612 24.7982 104.126 24.8382C103.641 24.8783 103.115 24.8883 102.579 24.8984C100.718 24.9382 98.8648 24.6499 97.1062 24.0467C95.5306 23.4993 94.0971 22.6131 92.9083 21.4518C91.761 20.3146 90.8714 18.9484 90.2986 17.4441C89.7132 15.8771 89.4284 14.2154 89.4591 12.5448C89.4467 10.8999 89.7381 9.26666 90.3188 7.72558C90.9082 6.21648 91.7876 4.83501 92.9083 3.65782C94.0783 2.44519 95.5148 1.51607 97.1062 0.942636C98.8149 0.30081 100.63 -0.01862 102.457 0.00083834H103.378L104.308 0.0809913C104.602 0.0809913 104.976 0.171163 105.431 0.251316C105.886 0.331469 106.271 0.411622 106.716 0.511814L107.333 0.6621L107.707 0.752272L108.041 0.812387H108.385L109.022 0.862483L109.072 1.5538ZM122.9 17.2538L132.813 2.05476C132.934 1.87441 133.035 1.72413 133.137 1.59388C133.228 1.46519 133.326 1.34144 133.43 1.22317C133.519 1.12155 133.614 1.02457 133.713 0.932617L134.047 0.642062L134.239 0.481756H141.047L139.388 1.71411C139.179 1.86086 138.988 2.03246 138.821 2.22508C138.686 2.38085 138.571 2.55246 138.477 2.73606C138.386 2.94773 138.321 3.16986 138.285 3.39732C138.238 3.72919 138.214 4.06401 138.214 4.39923V20.53C138.215 20.8652 138.239 21.1999 138.285 21.5319C138.323 21.7623 138.387 21.9876 138.477 22.2032C138.568 22.3824 138.683 22.5478 138.821 22.6941C138.992 22.8743 139.182 23.0355 139.388 23.1751L141.168 24.4174H130.749L132.449 23.1751C132.649 23.0358 132.832 22.8745 132.995 22.6941C133.132 22.5436 133.248 22.375 133.339 22.1932C133.437 21.9833 133.505 21.7607 133.541 21.5319C133.592 21.2004 133.616 20.8653 133.612 20.53V7.67549L123.649 22.8745L123.315 23.3454C123.214 23.4857 123.102 23.6159 123.001 23.7361C122.908 23.8379 122.811 23.9349 122.708 24.0267L122.394 24.2972L122.202 24.4475H115.374L117.074 23.2051C117.278 23.0712 117.462 22.9093 117.62 22.7242C117.76 22.5738 117.879 22.4053 117.974 22.2232C118.068 22.0117 118.136 21.7896 118.176 21.562C118.222 21.23 118.246 20.8952 118.247 20.5601V4.39923C118.248 4.06401 118.224 3.72919 118.176 3.39732C118.136 3.17288 118.068 2.95418 117.974 2.74608C117.876 2.55979 117.757 2.38502 117.62 2.22508C117.452 2.03414 117.265 1.85967 117.064 1.70409L115.465 0.481756H125.692L124.013 1.71411C123.806 1.86071 123.619 2.03238 123.456 2.22508C123.314 2.37574 123.198 2.54833 123.112 2.73606C123.016 2.94607 122.952 3.16883 122.92 3.39732C122.867 3.72864 122.844 4.06386 122.849 4.39923L122.9 17.2538ZM147.025 0.481756H153.094L153.256 0.932617L159.032 16.1517L164.312 3.1769C164.383 3.02661 164.433 2.87633 164.484 2.73606C164.544 2.56573 164.605 2.38539 164.656 2.21506C164.726 1.99464 164.777 1.80428 164.817 1.63396C164.858 1.46363 164.909 1.25323 164.949 1.05285L165.06 0.501794H181.912L182.094 0.902559L187.627 13.0257L191.249 4.59962C191.299 4.46937 191.35 4.3291 191.39 4.18883C191.444 4.03132 191.488 3.87071 191.522 3.70791C191.522 3.55763 191.582 3.39732 191.603 3.23701C191.613 3.08022 191.613 2.92291 191.603 2.76612C191.618 2.66649 191.618 2.56516 191.603 2.46554C191.579 2.36735 191.541 2.27292 191.491 2.18501C191.44 2.10166 191.378 2.02436 191.309 1.95457C191.237 1.88094 191.155 1.81695 191.066 1.7642L188.882 0.481756H197.247L196.832 1.48367L188.912 19.5181C188.548 20.3638 188.09 21.1669 187.546 21.9127C187.081 22.5593 186.51 23.1247 185.857 23.5859C185.238 24.0048 184.555 24.3228 183.834 24.5276C183.088 24.7398 182.314 24.8444 181.538 24.8382C181.184 24.8382 180.83 24.8382 180.526 24.8382C180.213 24.8117 179.902 24.7615 179.596 24.688C178.949 24.5386 178.336 24.2738 177.785 23.9065L177.128 23.4756L177.644 22.8845L179.758 20.4699L180.203 19.9489L180.729 20.3898C180.814 20.4667 180.905 20.5371 181.002 20.6002C181.084 20.6477 181.173 20.6848 181.265 20.7104C181.374 20.7433 181.486 20.7668 181.599 20.7805C181.727 20.7916 181.855 20.7916 181.983 20.7805C182.609 20.792 183.219 20.5904 183.713 20.2094C183.998 19.9973 184.256 19.7517 184.481 19.478C184.711 19.1951 184.904 18.8855 185.058 18.5563L185.412 17.8148L185.19 17.6345C184.978 17.4502 184.779 17.2527 184.593 17.0434C184.381 16.8026 184.194 16.5407 184.036 16.2619C183.864 15.9713 183.682 15.6206 183.49 15.26L178.028 3.8582C177.896 3.5977 177.755 3.35724 177.623 3.14684C177.478 2.93668 177.319 2.7359 177.148 2.5457C176.995 2.38229 176.83 2.23151 176.652 2.09483C176.491 1.97458 176.318 1.87053 176.136 1.78424L173.436 0.491775L171.413 1.74417C171.252 1.84067 171.111 1.96646 170.998 2.11487C170.89 2.26656 170.812 2.43629 170.765 2.61583C170.701 2.86153 170.663 3.11351 170.654 3.36726C170.644 3.70236 170.664 4.03767 170.715 4.36918L172.738 20.8306C172.774 21.1381 172.831 21.4427 172.91 21.7423C172.966 21.9531 173.051 22.1553 173.163 22.3435C173.259 22.509 173.378 22.6607 173.517 22.7943C173.661 22.9546 173.828 23.093 174.012 23.2051L175.823 24.4575H165.293L167.174 23.2051C167.353 23.0892 167.513 22.9474 167.65 22.7843C167.779 22.6305 167.885 22.4582 167.963 22.2733C168.049 22.001 168.09 21.7169 168.085 21.4317C168.098 20.8895 168.071 20.347 168.004 19.8086L166.638 7.38493L159.821 24.3373L159.467 25.239L158.728 24.5978L157.858 23.8363C157.652 23.6673 157.462 23.4794 157.292 23.2753C157.114 23.0598 156.952 22.8321 156.806 22.594C156.665 22.3535 156.513 22.083 156.381 21.8024C156.25 21.5219 156.118 21.2013 155.977 20.8005L150.798 7.35487L149.048 20.0391C148.965 20.5257 148.924 21.0184 148.926 21.5119C148.922 21.7675 148.963 22.022 149.048 22.2633C149.129 22.4365 149.242 22.593 149.382 22.7242C149.542 22.8766 149.726 23.0019 149.928 23.0949L152.568 24.3974H142.392L143.636 23.2652C143.839 23.0738 144.022 22.8623 144.182 22.634C144.341 22.4074 144.477 22.1658 144.587 21.9127C144.714 21.6237 144.819 21.3256 144.901 21.021C144.992 20.691 145.067 20.3566 145.123 20.019L147.328 4.45935C147.388 4.01423 147.418 3.56578 147.419 3.11679C147.426 2.91336 147.398 2.71026 147.338 2.51564C147.271 2.37937 147.182 2.25432 147.075 2.14493C146.939 2.0007 146.787 1.8729 146.62 1.7642L144.729 0.481756H147.025ZM201.151 0.481756H207.221L207.392 0.932617L213.168 16.1517L218.489 3.1769C218.539 3.05667 218.59 2.9164 218.671 2.706C218.671 2.55571 218.782 2.39541 218.833 2.19503C218.883 1.99464 218.954 1.78424 218.995 1.61392C219.045 1.41353 219.086 1.21315 219.126 1.04283L219.237 0.491775H227.593L225.57 1.75418C225.412 1.85072 225.274 1.97661 225.165 2.12489C225.05 2.27374 224.968 2.44422 224.922 2.62585C224.861 2.87195 224.827 3.12391 224.821 3.37728C224.817 3.71226 224.837 4.04709 224.882 4.37919L226.905 20.8406C226.939 21.1516 226.997 21.4597 227.077 21.7624C227.126 21.974 227.208 22.1768 227.319 22.3635C227.423 22.5246 227.541 22.6756 227.673 22.8144C227.819 22.9728 227.986 23.111 228.169 23.2252L230 24.4776H219.419L221.291 23.2252C221.471 23.1068 221.634 22.9653 221.776 22.8044C221.902 22.6499 222.005 22.4777 222.08 22.2934C222.17 22.0218 222.214 21.7375 222.211 21.4518C222.22 20.9096 222.193 20.3674 222.13 19.8287L220.755 7.40497L213.988 24.3673L213.623 25.2691L212.885 24.6278L212.005 23.8463C211.808 23.6813 211.625 23.5004 211.459 23.3053C211.281 23.0899 211.119 22.8622 210.973 22.624C210.817 22.3646 210.675 22.0971 210.548 21.8225C210.407 21.5319 210.275 21.2113 210.144 20.8707L204.924 7.35487L203.164 20.0391C203.089 20.5298 203.052 21.0255 203.053 21.5219C203.048 21.7775 203.089 22.032 203.174 22.2733C203.255 22.4466 203.368 22.603 203.508 22.7342C203.666 22.8891 203.851 23.0147 204.054 23.1049L206.684 24.4074H196.519L197.783 23.2252C197.987 23.0379 198.17 22.8297 198.329 22.604C198.489 22.3725 198.627 22.1278 198.744 21.8726C198.879 21.571 198.991 21.2595 199.078 20.9408C199.169 20.6113 199.24 20.2767 199.29 19.9389L201.485 4.37919C201.557 3.94543 201.591 3.50627 201.586 3.06669C201.597 2.85576 201.566 2.64485 201.495 2.4455C201.431 2.3095 201.346 2.18438 201.242 2.0748C201.106 1.93057 200.954 1.80277 200.787 1.69407L198.855 0.481756H201.151Z"
                              fill="#D82A00"/>
                    </svg>
                </a>
                <?php wp_nav_menu('container=nav&menu_id=menu-main&menu_class=mobile-main-container clearfix&theme_location=top_menu'); ?>
                <a href="#" class="menu-icon-toggle"><span></span></a>
            </div>
        </div>
    </header>
    <div class="mobile-menu">

        <?php wp_nav_menu('container=div&menu_id=menu-mobile&menu_class=mobile-main-container clearfix&theme_location=top_menu'); ?>
    </div>


