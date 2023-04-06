<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/scrollreveal"></script>
  <title>Portfolio | Enzo Cosson</title>
  <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png" />
  <link rel="manifest" href="./img/favicon/site.webmanifest" />
  <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#00aba9" />
  <meta name="theme-color" content="#ffffff" />

  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <div class="cursor_follow"></div>

  <?php
  require 'loader.php';
  require 'container_colors.php';
  require 'feedback.php';
  require 'header.php';
  ?>


  <main>
    <section class="home">
      <div class="title">
        <h1 class="title_name_front">ENZO COSSON</h1>
        <h1 class="title_dev_web_front">DEV WEB</h1>
        <h1 class="title_photo_video_front">PHOTO & VIDEO</h1>

        <img class="me" src="./img/me3.png" alt="photo d'Enzo Cosson" />

        <h1 class="title_name_back">ENZO COSSON</h1>
        <h1 class="title_dev_web_back">DEV WEB</h1>
        <h1 class="title_photo_video_back">PHOTO & VIDEO</h1>

        <h1 class="title_portfolio">PORTFOLIO</h1>

        <small class="title_small">BE CREATIVE EVERY DAY</small>
        <small class="title_small2">DEVELOPPEUR WEB & PHOTOGRAPHE</small>

        <div class="interaction">
          <a class="btn_dev" href="/developpement-web">WEB DEVELOPPEMENT | DESIGN</a>
          <!-- <a href="">DESIGN</a> -->
          <a class="btn_photo" href="/photo-video">PHOTOGRAPHY | VIDEO</a>
        </div>
      </div>

      <div class="home_side_right">
        <p>DISCOVER MY WORKS</p>
      </div>

      <div class="home_side_left">
        <div class="social">
          <svg class="social_img" viewBox="0 0 22 552" xmlns="http://www.w3.org/2000/svg">
            <path d="M21 551.264V547.736H12.9473V539.465H10.0762V547.736H4.23828V538.686H1.27148L1.27148 551.264H21ZM21.3418 522.8C21.3418 520.877 20.9271 519.218 20.0977 517.823C19.2682 516.429 18.0924 515.353 16.5703 514.597C15.0391 513.831 13.2298 513.448 11.1426 513.448H11.1152C9.02799 513.448 7.22331 513.831 5.70117 514.597C4.17904 515.353 3.00326 516.433 2.17383 517.837C1.3444 519.232 0.929688 520.886 0.929688 522.8C0.929688 524.714 1.3444 526.373 2.17383 527.776C3.00326 529.171 4.17904 530.251 5.70117 531.017C7.22331 531.782 9.02799 532.165 11.1152 532.165H11.1426C13.2298 532.165 15.0391 531.787 16.5703 531.03C18.0924 530.265 19.2682 529.185 20.0977 527.79C20.9271 526.387 21.3418 524.723 21.3418 522.8ZM18.293 522.8C18.293 523.976 18.0013 524.997 17.418 525.862C16.8346 526.728 16.0098 527.398 14.9434 527.872C13.8678 528.337 12.6009 528.569 11.1426 528.569H11.1152C9.64779 528.569 8.38086 528.337 7.31445 527.872C6.24805 527.398 5.42773 526.728 4.85352 525.862C4.27018 524.987 3.97852 523.967 3.97852 522.8C3.97852 521.624 4.27018 520.603 4.85352 519.737C5.42773 518.872 6.2526 518.206 7.32813 517.741C8.39453 517.267 9.6569 517.03 11.1152 517.03H11.1426C12.5918 517.03 13.8542 517.263 14.9297 517.728C15.9961 518.193 16.8255 518.858 17.418 519.724C18.0013 520.581 18.293 521.606 18.293 522.8ZM21 506.012V493.543H18.0332V502.485H1.27148V506.012H21ZM21 486.38V473.911H18.0332V482.853H1.27148V486.38H21ZM21.3418 458.874C21.3418 456.95 20.9271 455.291 20.0977 453.897C19.2682 452.502 18.0924 451.427 16.5703 450.67C15.0391 449.905 13.2298 449.522 11.1426 449.522H11.1152C9.02799 449.522 7.22331 449.905 5.70117 450.67C4.17904 451.427 3.00326 452.507 2.17383 453.911C1.3444 455.305 0.929688 456.959 0.929688 458.874C0.929688 460.788 1.3444 462.446 2.17383 463.85C3.00326 465.245 4.17904 466.325 5.70117 467.09C7.22331 467.856 9.02799 468.239 11.1152 468.239H11.1426C13.2298 468.239 15.0391 467.86 16.5703 467.104C18.0924 466.338 19.2682 465.258 20.0977 463.864C20.9271 462.46 21.3418 460.797 21.3418 458.874ZM18.293 458.874C18.293 460.049 18.0013 461.07 17.418 461.936C16.8346 462.802 16.0098 463.472 14.9434 463.946C13.8678 464.411 12.6009 464.643 11.1426 464.643H11.1152C9.64779 464.643 8.38086 464.411 7.31445 463.946C6.24805 463.472 5.42773 462.802 4.85352 461.936C4.27018 461.061 3.97852 460.04 3.97852 458.874C3.97852 457.698 4.27018 456.677 4.85352 455.811C5.42773 454.945 6.2526 454.28 7.32813 453.815C8.39453 453.341 9.6569 453.104 11.1152 453.104H11.1426C12.5918 453.104 13.8542 453.336 14.9297 453.801C15.9961 454.266 16.8255 454.931 17.418 455.797C18.0013 456.654 18.293 457.68 18.293 458.874ZM21 438.627V435.222L6.83594 431.244V431.162L21 427.183V423.779L1.27148 418.502V422.152L16.1602 425.584V425.652L1.27148 429.603L1.27148 432.802L16.1602 436.754V436.822L1.27148 440.254V443.918L21 438.627ZM21 401.291V398.119H6.95898V396.492L1.81836 400.088L21 392.322V389.93L1.81836 382.164L6.95898 385.76V384.133H21V380.961H1.27148V385.035L16.3516 391.078V391.174L1.27148 397.217L1.27148 401.291H21ZM21 367.304V363.79H13.2207L1.27148 356.872L1.27148 360.728L9.85742 365.499V365.595L1.27148 370.366L1.27148 374.222L13.2207 367.304H21ZM21.3418 332.976C21.3418 331.372 21.0957 329.995 20.6035 328.847C20.1113 327.689 19.4141 326.805 18.5117 326.195C17.6094 325.575 16.5475 325.265 15.3262 325.265H15.3125C14.2917 325.265 13.4167 325.474 12.6875 325.894C11.9583 326.304 11.3522 326.942 10.8691 327.808C10.3861 328.674 10.0033 329.795 9.7207 331.171L9.2832 333.29C9.03711 334.475 8.69987 335.35 8.27148 335.915C7.83398 336.471 7.26888 336.749 6.57617 336.749H6.5625C6.03385 336.749 5.56901 336.599 5.16797 336.298C4.76693 335.988 4.45703 335.555 4.23828 334.999C4.01042 334.434 3.89648 333.769 3.89648 333.003C3.89648 332.265 4.00586 331.613 4.22461 331.048C4.44336 330.483 4.75781 330.027 5.16797 329.681C5.56901 329.335 6.05664 329.12 6.63086 329.038L6.80859 329.011V325.648L6.57617 325.661C5.45508 325.725 4.4707 326.067 3.62305 326.687C2.77539 327.297 2.11458 328.14 1.64063 329.216C1.16667 330.292 0.929688 331.545 0.929688 332.976C0.929688 334.389 1.17578 335.646 1.66797 336.749C2.15104 337.852 2.83008 338.718 3.70508 339.347C4.57096 339.967 5.58724 340.281 6.75391 340.29H6.76758C8.23503 340.29 9.42904 339.807 10.3496 338.841C11.2611 337.875 11.9173 336.426 12.3184 334.493L12.7559 332.374C13.0293 331.098 13.3802 330.187 13.8086 329.64C14.237 329.084 14.8203 328.806 15.5586 328.806H15.5723C16.1374 328.806 16.6341 328.97 17.0625 329.298C17.4818 329.626 17.8053 330.096 18.0332 330.706C18.2611 331.308 18.375 332.023 18.375 332.853C18.375 333.673 18.2656 334.407 18.0469 335.054C17.819 335.692 17.5 336.207 17.0898 336.599C16.6797 336.991 16.1921 337.237 15.627 337.337L15.4629 337.364V340.728L15.668 340.714C16.8438 340.632 17.8555 340.267 18.7031 339.62C19.5508 338.964 20.2025 338.071 20.6582 336.941C21.1139 335.81 21.3418 334.489 21.3418 332.976ZM21.3418 309.311C21.3418 307.388 20.9271 305.729 20.0977 304.334C19.2682 302.94 18.0924 301.864 16.5703 301.108C15.0391 300.342 13.2298 299.959 11.1426 299.959H11.1152C9.02799 299.959 7.22331 300.342 5.70117 301.108C4.17904 301.864 3.00326 302.944 2.17383 304.348C1.3444 305.743 0.929688 307.397 0.929688 309.311C0.929688 311.225 1.3444 312.884 2.17383 314.287C3.00326 315.682 4.17904 316.762 5.70117 317.528C7.22331 318.293 9.02799 318.676 11.1152 318.676H11.1426C13.2298 318.676 15.0391 318.298 16.5703 317.541C18.0924 316.776 19.2682 315.696 20.0977 314.301C20.9271 312.897 21.3418 311.234 21.3418 309.311ZM18.293 309.311C18.293 310.487 18.0013 311.507 17.418 312.373C16.8346 313.239 16.0098 313.909 14.9434 314.383C13.8678 314.848 12.6009 315.08 11.1426 315.08H11.1152C9.64779 315.08 8.38086 314.848 7.31445 314.383C6.24805 313.909 5.42773 313.239 4.85352 312.373C4.27018 311.498 3.97852 310.478 3.97852 309.311C3.97852 308.135 4.27018 307.114 4.85352 306.248C5.42773 305.382 6.2526 304.717 7.32813 304.252C8.39453 303.778 9.6569 303.541 11.1152 303.541H11.1426C12.5918 303.541 13.8542 303.774 14.9297 304.239C15.9961 304.703 16.8255 305.369 17.418 306.235C18.0013 307.091 18.293 308.117 18.293 309.311ZM21.3418 283.937C21.3418 282.424 21.0547 281.066 20.4805 279.863C19.8971 278.66 19.0905 277.68 18.0605 276.923C17.0306 276.167 15.8457 275.706 14.5059 275.542L14.3555 275.515V278.974L14.4922 279.015C15.3034 279.225 15.9915 279.557 16.5566 280.013C17.1217 280.469 17.5547 281.029 17.8555 281.695C18.1471 282.351 18.293 283.098 18.293 283.937C18.293 285.076 18.0013 286.074 17.418 286.931C16.8255 287.779 15.9961 288.435 14.9297 288.9C13.8542 289.365 12.5872 289.597 11.1289 289.597H11.1152C9.64779 289.597 8.38542 289.365 7.32813 288.9C6.26172 288.435 5.43685 287.779 4.85352 286.931C4.27018 286.083 3.97852 285.085 3.97852 283.937C3.97852 283.08 4.12891 282.319 4.42969 281.654C4.73047 280.988 5.1543 280.437 5.70117 279.999C6.24805 279.562 6.89974 279.247 7.65625 279.056L7.91602 278.988L7.91602 275.529L7.7793 275.542C6.43945 275.716 5.25456 276.18 4.22461 276.937C3.19466 277.693 2.38802 278.673 1.80469 279.876C1.22135 281.07 0.929688 282.424 0.929688 283.937C0.929688 285.824 1.3444 287.46 2.17383 288.845C2.99414 290.231 4.16536 291.302 5.6875 292.058C7.20964 292.815 9.01888 293.193 11.1152 293.193H11.1289C13.2253 293.193 15.0391 292.819 16.5703 292.072C18.0924 291.315 19.2682 290.244 20.0977 288.859C20.9271 287.464 21.3418 285.824 21.3418 283.937ZM21 268.215V264.688H1.27148V268.215H21ZM21 257.963V254.271L4.78516 248.966L4.78516 247.941H1.27148V250.908L21 257.963ZM15.9004 254.394V243.47L13.1797 244.414V253.451L15.9004 254.394ZM21 243.593V239.902L1.27148 246.943V248.898H4.78516L21 243.593ZM21 233.163V220.694H18.0332V229.636H1.27148V233.163H21ZM21.3418 206.6C21.3418 204.995 21.0957 203.619 20.6035 202.471C20.1113 201.313 19.4141 200.429 18.5117 199.818C17.6094 199.199 16.5475 198.889 15.3262 198.889H15.3125C14.2917 198.889 13.4167 199.098 12.6875 199.518C11.9583 199.928 11.3522 200.566 10.8691 201.432C10.3861 202.297 10.0033 203.419 9.7207 204.795L9.2832 206.914C9.03711 208.099 8.69987 208.974 8.27148 209.539C7.83398 210.095 7.26888 210.373 6.57617 210.373H6.5625C6.03385 210.373 5.56901 210.223 5.16797 209.922C4.76693 209.612 4.45703 209.179 4.23828 208.623C4.01042 208.058 3.89648 207.393 3.89648 206.627C3.89648 205.889 4.00586 205.237 4.22461 204.672C4.44336 204.107 4.75781 203.651 5.16797 203.305C5.56901 202.958 6.05664 202.744 6.63086 202.662L6.80859 202.635V199.271L6.57617 199.285C5.45508 199.349 4.4707 199.691 3.62305 200.31C2.77539 200.921 2.11458 201.764 1.64063 202.84C1.16667 203.915 0.929688 205.169 0.929688 206.6C0.929688 208.012 1.17578 209.27 1.66797 210.373C2.15104 211.476 2.83008 212.342 3.70508 212.971C4.57096 213.59 5.58724 213.905 6.75391 213.914H6.76758C8.23503 213.914 9.42904 213.431 10.3496 212.465C11.2611 211.499 11.9173 210.049 12.3184 208.117L12.7559 205.998C13.0293 204.722 13.3802 203.81 13.8086 203.264C14.237 202.708 14.8203 202.43 15.5586 202.43H15.5723C16.1374 202.43 16.6341 202.594 17.0625 202.922C17.4818 203.25 17.8053 203.719 18.0332 204.33C18.2611 204.932 18.375 205.647 18.375 206.477C18.375 207.297 18.2656 208.031 18.0469 208.678C17.819 209.316 17.5 209.831 17.0898 210.223C16.6797 210.615 16.1921 210.861 15.627 210.961L15.4629 210.988V214.352L15.668 214.338C16.8438 214.256 17.8555 213.891 18.7031 213.244C19.5508 212.588 20.2025 211.695 20.6582 210.564C21.1139 209.434 21.3418 208.113 21.3418 206.6ZM21 181.377V177.877H7.10938V176.373L4.36133 179.709L21 168.156V165.012H1.27148V168.512H15.1074V170.002L17.8691 166.666L1.27148 178.205V181.377H21ZM21 156.906V144.136H18.0332V153.378H12.4004V144.642H9.55664V153.378H4.23828V144.136H1.27148L1.27148 156.906H21ZM21 131.627V128.114H4.23828V122.221H1.27148L1.27148 137.534H4.23828L4.23828 131.627H21ZM21 111.039V107.634L6.83594 103.656V103.574L21 99.5952V96.1909L1.27148 90.9136V94.564L16.1602 97.9956V98.064L1.27148 102.015V105.214L16.1602 109.166V109.234L1.27148 112.666V116.33L21 111.039ZM21.3418 75.944C21.3418 74.0208 20.9271 72.362 20.0977 70.9674C19.2682 69.5729 18.0924 68.4974 16.5703 67.7409C15.0391 66.9753 13.2298 66.5924 11.1426 66.5924H11.1152C9.02799 66.5924 7.22331 66.9753 5.70117 67.7409C4.17904 68.4974 3.00326 69.5775 2.17383 70.9811C1.3444 72.3756 0.929688 74.0299 0.929688 75.944C0.929688 77.8581 1.3444 79.5169 2.17383 80.9206C3.00326 82.3151 4.17904 83.3952 5.70117 84.1608C7.22331 84.9264 9.02799 85.3092 11.1152 85.3092H11.1426C13.2298 85.3092 15.0391 84.931 16.5703 84.1745C18.0924 83.4088 19.2682 82.3288 20.0977 80.9342C20.9271 79.5306 21.3418 77.8672 21.3418 75.944ZM18.293 75.944C18.293 77.1198 18.0013 78.1406 17.418 79.0065C16.8346 79.8724 16.0098 80.5423 14.9434 81.0163C13.8678 81.4811 12.6009 81.7135 11.1426 81.7135H11.1152C9.64779 81.7135 8.38086 81.4811 7.31445 81.0163C6.24805 80.5423 5.42773 79.8724 4.85352 79.0065C4.27018 78.1315 3.97852 77.1107 3.97852 75.944C3.97852 74.7682 4.27018 73.7474 4.85352 72.8815C5.42773 72.0156 6.2526 71.3503 7.32813 70.8854C8.39453 70.4114 9.6569 70.1745 11.1152 70.1745H11.1426C12.5918 70.1745 13.8542 70.4069 14.9297 70.8717C15.9961 71.3366 16.8255 72.0019 17.418 72.8678C18.0013 73.7246 18.293 74.75 18.293 75.944ZM21 59.156V55.6287H13.6172V51.9919C13.6172 51.9646 13.6172 51.9373 13.6172 51.9099C13.6172 51.8735 13.6172 51.8416 13.6172 51.8142L21 47.9314V43.9119L13.084 48.2185C12.6647 47.0792 11.9538 46.1768 10.9512 45.5115C9.94857 44.837 8.7819 44.4998 7.45117 44.4998H7.42383C6.1569 44.4998 5.06315 44.7732 4.14258 45.3201C3.22201 45.8669 2.51563 46.6462 2.02344 47.658C1.52214 48.6697 1.27148 49.8774 1.27148 51.281L1.27148 59.156H21ZM10.8281 55.6287H4.11523V51.7185C4.11523 50.6065 4.41602 49.727 5.01758 49.0798C5.61003 48.4327 6.42122 48.1091 7.45117 48.1091H7.47852C8.53581 48.1091 9.36068 48.419 9.95313 49.0388C10.5365 49.6586 10.8281 50.5291 10.8281 51.6501V55.6287ZM14.8613 33.7001L10.1855 29.7489V29.202L1.27148 21.7372L1.27148 25.7704L10.541 33.4266V33.7001H14.8613ZM21 37.036V33.5087H1.27148V37.036H21ZM21 25.4286V21.1493L9.2832 29.5302L11.6348 32.0594L21 25.4286ZM21.3418 7.82031C21.3418 6.21615 21.0957 4.83984 20.6035 3.69141C20.1113 2.53385 19.4141 1.64974 18.5117 1.03906C17.6094 0.419271 16.5475 0.109375 15.3262 0.109375H15.3125C14.2917 0.109375 13.4167 0.31901 12.6875 0.738281C11.9583 1.14844 11.3522 1.78646 10.8691 2.65234C10.3861 3.51823 10.0033 4.63932 9.7207 6.01562L9.2832 8.13477C9.03711 9.31966 8.69987 10.1947 8.27148 10.7598C7.83398 11.3158 7.26888 11.5938 6.57617 11.5938H6.5625C6.03385 11.5938 5.56901 11.4434 5.16797 11.1426C4.76693 10.8327 4.45703 10.3997 4.23828 9.84375C4.01042 9.27865 3.89648 8.61328 3.89648 7.84766C3.89648 7.10938 4.00586 6.45768 4.22461 5.89258C4.44336 5.32747 4.75781 4.87174 5.16797 4.52539C5.56901 4.17904 6.05664 3.96484 6.63086 3.88281L6.80859 3.85547V0.492188L6.57617 0.505859C5.45508 0.569661 4.4707 0.911458 3.62305 1.53125C2.77539 2.14193 2.11458 2.98503 1.64063 4.06055C1.16667 5.13607 0.929688 6.38932 0.929688 7.82031C0.929688 9.23307 1.17578 10.4909 1.66797 11.5938C2.15104 12.6966 2.83008 13.5625 3.70508 14.1914C4.57096 14.8112 5.58724 15.1257 6.75391 15.1348H6.76758C8.23503 15.1348 9.42904 14.6517 10.3496 13.6855C11.2611 12.7194 11.9173 11.2702 12.3184 9.33789L12.7559 7.21875C13.0293 5.94271 13.3802 5.03125 13.8086 4.48438C14.237 3.92839 14.8203 3.65039 15.5586 3.65039H15.5723C16.1374 3.65039 16.6341 3.81445 17.0625 4.14258C17.4818 4.4707 17.8053 4.9401 18.0332 5.55078C18.2611 6.15234 18.375 6.86784 18.375 7.69727C18.375 8.51758 18.2656 9.2513 18.0469 9.89844C17.819 10.5365 17.5 11.0514 17.0898 11.4434C16.6797 11.8353 16.1921 12.0814 15.627 12.1816L15.4629 12.209V15.5723L15.668 15.5586C16.8438 15.4766 17.8555 15.112 18.7031 14.4648C19.5508 13.8086 20.2025 12.9154 20.6582 11.7852C21.1139 10.6549 21.3418 9.33333 21.3418 7.82031Z" fill="#FCFCFC" />
          </svg>

          <span class="social_line"></span>
        </div>

        <div class="reseau">
          <a style="--a: 1" href="https://www.instagram.com/nzo_cos/" target="_blank">
            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 4.125C7.20363 4.125 4.125 7.20363 4.125 11V22C4.125 25.7964 7.20363 28.875 11 28.875H22C25.7964 28.875 28.875 25.7964 28.875 22V11C28.875 7.20363 25.7964 4.125 22 4.125H11ZM24.75 6.875C25.509 6.875 26.125 7.491 26.125 8.25C26.125 9.009 25.509 9.625 24.75 9.625C23.991 9.625 23.375 9.009 23.375 8.25C23.375 7.491 23.991 6.875 24.75 6.875ZM16.5 9.625C20.2964 9.625 23.375 12.7036 23.375 16.5C23.375 20.2964 20.2964 23.375 16.5 23.375C12.7036 23.375 9.625 20.2964 9.625 16.5C9.625 12.7036 12.7036 9.625 16.5 9.625ZM16.5 12.375C15.406 12.375 14.3568 12.8096 13.5832 13.5832C12.8096 14.3568 12.375 15.406 12.375 16.5C12.375 17.594 12.8096 18.6432 13.5832 19.4168C14.3568 20.1904 15.406 20.625 16.5 20.625C17.594 20.625 18.6432 20.1904 19.4168 19.4168C20.1904 18.6432 20.625 17.594 20.625 16.5C20.625 15.406 20.1904 14.3568 19.4168 13.5832C18.6432 12.8096 17.594 12.375 16.5 12.375Z" fill="#70E8CB" />
            </svg>
          </a>
          <a style="--a: 2" href="https://www.linkedin.com/in/enzo-cosson/" target="_blank">
            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M24.5417 3.875H6.45833C5.03104 3.875 3.875 5.03104 3.875 6.45833V24.5417C3.875 25.969 5.03104 27.125 6.45833 27.125H24.5417C25.969 27.125 27.125 25.969 27.125 24.5417V6.45833C27.125 5.03104 25.969 3.875 24.5417 3.875ZM11.625 21.9583H8.36613V12.9167H11.625V21.9583ZM9.93808 11.2595C8.94221 11.2595 8.277 10.5955 8.277 9.70946C8.277 8.82338 8.94092 8.15946 10.0479 8.15946C11.0437 8.15946 11.709 8.82338 11.709 9.70946C11.709 10.5955 11.045 11.2595 9.93808 11.2595ZM23.25 21.9583H20.0957V17.0164C20.0957 15.6498 19.2549 15.3347 18.9397 15.3347C18.6245 15.3347 17.5731 15.5452 17.5731 17.0164C17.5731 17.227 17.5731 21.9583 17.5731 21.9583H14.3142V12.9167H17.5731V14.1786C17.9929 13.4424 18.8338 12.9167 20.4109 12.9167C21.988 12.9167 23.25 14.1786 23.25 17.0164V21.9583Z" fill="#70E8CB" />
            </svg>
          </a>
          <a style="--a: 3" href="https://github.com/enzocosson" target="_blank">
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14 2C7.37188 2 2 7.37188 2 14C2 20.6281 7.37188 26 14 26C20.6281 26 26 20.6281 26 14C26 7.37188 20.6281 2 14 2ZM14 4.4C19.2922 4.4 23.6 8.70781 23.6 14C23.6 14.5625 23.5438 15.1156 23.45 15.65C23.1547 15.5844 22.7188 15.5047 22.2125 15.5C21.8375 15.4953 21.3688 15.5563 20.975 15.6125C21.1109 15.1953 21.2 14.7359 21.2 14.2625C21.2 13.1094 20.6375 12.0359 19.7375 11.15C19.9859 10.2266 20.2297 8.64219 19.5875 8C17.6891 8 16.6391 9.35469 16.5875 9.425C16.0016 9.28438 15.3969 9.2 14.75 9.2C13.9203 9.2 13.1281 9.35 12.3875 9.575L12.6125 9.3875C12.6125 9.3875 11.5578 7.925 9.6125 7.925C8.93281 8.60938 9.24219 10.3438 9.5 11.225C8.58125 12.1016 8 13.1375 8 14.2625C8 14.6563 8.09375 15.0313 8.1875 15.3875C7.85469 15.35 6.65469 15.2375 6.1625 15.2375C5.72656 15.2375 5.05156 15.3406 4.5125 15.4625C4.4375 14.9844 4.4 14.4969 4.4 14C4.4 8.70781 8.70781 4.4 14 4.4ZM6.1625 15.5375C6.63594 15.5375 8.075 15.7063 8.2625 15.725C8.28594 15.7906 8.30938 15.8516 8.3375 15.9125C7.82188 15.8656 6.82344 15.7953 6.1625 15.875C5.72188 15.9266 5.15938 16.0859 4.6625 16.2125C4.625 16.0625 4.57813 15.9172 4.55 15.7625C5.075 15.65 5.76406 15.5375 6.1625 15.5375ZM22.2125 15.8C22.6906 15.8047 23.1266 15.8844 23.4125 15.95C23.3984 16.0297 23.3563 16.0953 23.3375 16.175C23.0328 16.1047 22.5313 16.0016 21.95 15.9875C21.6688 15.9828 21.2188 15.9969 20.825 16.025C20.8438 15.9875 20.8484 15.95 20.8625 15.9125C21.2703 15.8563 21.7906 15.7953 22.2125 15.8ZM6.9125 16.1375C7.5875 16.1422 8.22031 16.1891 8.4875 16.2125C9.11563 17.3844 10.3859 18.2516 12.35 18.6125C11.8672 18.8797 11.4359 19.2547 11.1125 19.7C10.8313 19.7234 10.5359 19.7375 10.25 19.7375C9.41563 19.7375 8.89531 18.9922 8.45 18.35C8 17.7078 7.44688 17.6375 7.1375 17.6C6.82344 17.5625 6.71563 17.7406 6.875 17.8625C7.78906 18.5656 8.11719 19.4 8.4875 20.15C8.82031 20.825 9.51875 21.2 10.2875 21.2H10.4375C10.4141 21.3313 10.4 21.4531 10.4 21.575V22.8875C7.62969 21.7672 5.52031 19.4 4.7375 16.475C5.22969 16.3531 5.78281 16.2266 6.2 16.175C6.39219 16.1516 6.63594 16.1328 6.9125 16.1375ZM21.95 16.2875C22.4891 16.3016 22.9672 16.4047 23.2625 16.475C22.6016 18.9594 20.9703 21.0266 18.8 22.2875V21.575C18.8 20.5531 17.9938 19.2406 16.85 18.6125C18.7484 18.2656 19.9859 17.4359 20.6375 16.325C21.0922 16.2922 21.6266 16.2781 21.95 16.2875ZM14.6 21.2C14.9281 21.2 15.2 21.4719 15.2 21.8V23.525C14.8063 23.5766 14.4078 23.6 14 23.6V21.8C14 21.4719 14.2719 21.2 14.6 21.2ZM12.2 22.4C12.5281 22.4 12.8 22.6719 12.8 23V23.525C12.3969 23.4734 11.9891 23.3984 11.6 23.3V23C11.6 22.6719 11.8719 22.4 12.2 22.4ZM17 22.4C17.2906 22.4 17.5438 22.6109 17.6 22.8875C17.2109 23.0469 16.8125 23.1922 16.4 23.3V23C16.4 22.6719 16.6719 22.4 17 22.4Z" fill="#70E8CB" />
            </svg>
          </a>
          <a style="--a: 4" href="https://dribbble.com/nzo_cos" target="_blank">
            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.83333 2.41669C3.50228 2.41669 2.41667 3.5023 2.41667 4.83335V24.1667C2.41667 25.4977 3.50228 26.5834 4.83333 26.5834H24.1667C25.4977 26.5834 26.5833 25.4977 26.5833 24.1667V4.83335C26.5833 3.5023 25.4977 2.41669 24.1667 2.41669H4.83333ZM14.8021 4.83335C16.0199 4.83335 17.4831 6.01809 17.4831 11.668C17.4831 13.6882 16.8931 16.6948 15.7461 19.1068C16.2464 19.7865 16.7231 20.0886 17.0677 20.0886C17.535 19.9942 18.5828 18.1297 19.1445 16.3503C19.3003 15.8594 19.8006 15.5904 20.2773 15.7461C20.7635 15.8877 21.0231 16.44 20.8815 16.9167C20.4048 18.4318 19.0737 21.9388 17.0677 21.9388C16.4352 21.9388 15.6139 21.632 14.8021 20.806C13.8817 22.0946 12.7158 22.9584 11.3659 22.9584C8.51026 22.9584 7.25 20.3576 7.25 18.125C7.25 15.7508 8.46305 13.5182 11.1016 13.5182C11.5452 13.5182 11.9512 13.6126 12.3099 13.7448C12.2627 13.0651 12.2344 12.3288 12.2344 11.5547C12.2344 11.4839 12.2344 4.83335 14.8021 4.83335ZM14.8776 6.7969C14.4953 7.46714 14.0469 9.45428 14.0469 11.5547C14.0469 13.8251 14.3065 15.5762 14.6888 16.8789C15.2741 15.208 15.6706 13.3011 15.6706 11.668C15.6706 8.58579 15.1655 7.22642 14.8776 6.7969ZM10.7617 15.3685C9.12858 15.6942 9.10026 18.3421 9.10026 18.4649C9.10026 19.2626 9.2985 21.1081 11.3659 21.1081C12.1636 21.1081 12.9754 20.3529 13.6693 19.1823C13.2492 18.3705 12.8621 17.3651 12.612 16.086C12.5506 16.0482 12.4987 15.9821 12.4609 15.9349C12.4609 15.9349 11.8757 15.3685 11.1016 15.3685C10.9788 15.3685 10.8703 15.3449 10.7617 15.3685Z" fill="#70E8CB" />
            </svg>
          </a>
          <a style="--a: 5" href="https://www.facebook.com/enzo.cosson.5/" target="_blank">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21.9062 11.25H17.5V8.74996C17.5 7.45996 17.605 6.64746 19.4537 6.64746H21.7887V2.67246C20.6525 2.55496 19.51 2.49746 18.3662 2.49996C14.975 2.49996 12.5 4.57121 12.5 8.37371V11.25H8.75V16.25L12.5 16.2487V27.5H17.5V16.2462L21.3325 16.245L21.9062 11.25Z" fill="#70E8CB" />
            </svg>
          </a>
        </div>
      </div>

      <a href="#works" class="home_arrow"></a>
    </section>

    <section id="works" class="works">
      <h1>About My <span>Works</span></h1>
      <img class="iphone iphone1" src="./img/mockup/phone1.webp" alt="iphone" />
      <img class="iphone iphone2" src="./img/mockup/phone2.webp" alt="iphone" />
      <img class="iphone iphone3" src="./img/mockup/phone3.webp" alt="iphone" />
      <span class="green_circle"></span>
      <span class="white_circle"></span>

      <h3 class="h3_text">DESIGN</h3>

      <p class="right_text_absolute">WEB DEVELOPPEMENT</p>
    </section>

    <section class="soda">
      <h4 class="first_translate">
        DIGITAL DESIGN EXPERIENCE
        <span>DIGITAL DESIGN EXPERIENCE</span> DIGITAL DESIGN EXPERIENCE
      </h4>

      <img class="imac_soda" src="./img/mockup/soda_black.webp" alt="imac sur le site soda" />

      <h4 class="last_translate">
        DIGITAL DESIGN EXPERIENCE <span>DIGITAL DESIGN EXPERIENCE</span>
      </h4>
    </section>

    <div class="concept">
      <h1>DISCOVER MY <span>CONCEPTS</span></h1>
      <span class="rectangle_green"></span>
      <img class="ipad_imovix" src="./img/mockup/ipad_imovix.webp" alt="ipad sur le site imovix" />
      <img class="ipad_spiderman" src="./img/mockup/ipad_spiderman.webp" alt="ipad sur le site imovix" />
      <img class="ipad_myList" src="./img/mockup/ipad_myList.webp" alt="ipad sur le site imovix" />
      <img class="ipad_log" src="./img/mockup/ipad_log.webp" alt="ipad sur le site imovix" />
      <div class="whiteRectangle">
        <h1 class="titre_skills">MY SKILLS</h1>
        <h2 class="bg_titre_skills">MY SKILLS</h2>
      </div>
    </div>

    <div class="skills">
      <h1 class="skills_html">HTML</h1>
      <h2 class="skills_html_bg">HTML</h2>

      <h1 class="skills_css">CSS</h1>
      <h2 class="skills_css_bg">CSS</h2>

      <h1 class="skills_scss">SCSS</h1>
      <h2 class="skills_scss_bg">SCSS</h2>

      <h1 class="skills_js">JAVASCRIPT</h1>
      <h2 class="skills_js_bg">JAVASCRIPT</h2>

      <h1 class="skills_reactJs">REACT JS</h1>
      <h2 class="skills_reactJs_bg">REACT JS</h2>

      <h1 class="skills_threeJs">THREE JS</h1>
      <h2 class="skills_threeJs_bg">THREE JS</h2>

      <h1 class="skills_php">PHP</h1>
      <h2 class="skills_php_bg">PHP</h2>

      <h1 class="skills_mysql">MYSQL</h1>
      <h2 class="skills_mysql_bg">MYSQL</h2>

      <h1 class="skills_git">GIT</h1>
      <h2 class="skills_git_bg">GIT</h2>

      <h1 class="skills_figma">FIGMA</h1>
      <h2 class="skills_figma_bg">FIGMA</h2>
    </div>

    <div class="transition_green">
      <div class="transition_circle"></div>
    </div>
    <section class="see_more">
      <a href="/developpement-web">
        <span class="stroke_green_circle1"> SEE MORE </span></a>
      <span class="stroke_green_circle2"></span>
      <span class="stroke_green_circle3"></span>
      <span class="stroke_green_circle4"></span>
      <h1 class="transition_title">LOOK AT MY WORK</h1>
    </section>

    <!-- partie design --------------------  -->

    <section class="photoVideoTop">
      <h1 class="photoVideoTop__title_front">
        PHOTOGRAPHY<br />&<br />VIDEO
      </h1>
      <div class="container_photoVideoTop_img">
        <img src="./img/photo_video/galerie_accueil/bg_photo.webp" alt="rivière exotique dans la jungle" class="photoVideoTop_img" />
      </div>
      <h1 class="photoVideoTop__title">PHOTOGRAPHY<br />&<br />VIDEO</h1>
    </section>

    <div class="feed">
      <div class="container_feed_col">
        <div class="col col1">
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0483 1.webp" alt="feuille avec des gouttes d'eau" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0523 1.webp" alt="feuille de palmier" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0067 1.webp" alt="pente enneigé d'une montagne" />
          </div>
        </div>

        <div class="col col2">
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0515 1.webp" alt="fleure tropicale violette" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0215 1.webp" alt="feuille tropicale verte" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0021 1.webp" alt="cabane en bois au sommet d'une montagne" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0030 1.webp" alt="plaine enneigée" />
          </div>
        </div>

        <div class="col col3">
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0089 1.webp" alt="végétation tropicale" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0241-2.webp" alt="rivière turquoise tropicale" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0533 1.webp" alt="gouttes sur de l'herbe" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0052 2.webp" alt="montagne enneigé au sommet pointu" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0023 1.webp" alt="télésièges dans la montagne" />
          </div>
        </div>

        <div class="col col4">
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0450 2.webp" alt="feuille tropicale" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0254.webp" alt="cascade dans la jungle" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0022 1.webp" alt="sommet d'une' la montagne enneigé" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0031 1.webp" alt="flanc d'une montagne enneigé" />
          </div>
        </div>

        <div class="col col5">
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0145 1.webp" alt="feuille verte exotique" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0321 1.webp" alt="feuille tropicale" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo_video/galerie_accueil/DSC_0081 1.webp" alt="montagne enneigé" />
          </div>
        </div>
      </div>
    </div>

    <section class="see_more_album">
      <a href="/photo-video">
        <span class="album_stroke_green_circle1"> SEE MORE </span>
      </a>
      <span class="album_stroke_green_circle2"></span>
      <span class="album_stroke_green_circle3"></span>
      <span class="album_stroke_green_circle4"></span>
      <h1 class="album_transition_title">LOOK AT MY ALBUM</h1>
    </section>


    <?php require 'footer.php'; ?>

  </main>
</body>
<script>
  window.addEventListener("load", function() {
    document.body.classList.add("body_loaded");
  });
</script>
<script>
  window.addEventListener("load", function() {
    document.body.classList.add("body_loaded");
  });
</script>
<script>
  const circle = document.querySelector(".stroke_green_circle1");
  const seeMore = document.querySelector(".see_more");
  const transitionTitle = document.querySelector(".transition_title");

  const circleAlbum = document.querySelector(".album_stroke_green_circle1");
  const seeMoreAlbum = document.querySelector(".see_more_album");
  const transitionTitleAlbum = document.querySelector(
    ".album_transition_title"
  );

  circle.addEventListener("mouseover", function() {
    seeMore.classList.add("see_more_active");
    transitionTitle.classList.add("transition_title_active");
    circle.classList.add("stroke_green_circle1_active");
  });

  circle.addEventListener("mouseout", function() {
    seeMore.classList.remove("see_more_active");
    transitionTitle.classList.remove("transition_title_active");
    circle.classList.remove("stroke_green_circle1_active");
  });

  circleAlbum.addEventListener("mouseover", function() {
    seeMoreAlbum.classList.add("see_more_album_active");
    transitionTitleAlbum.classList.add("album_transition_title_active");
    circleAlbum.classList.add("album_stroke_green_circle1_active");
  });

  circleAlbum.addEventListener("mouseout", function() {
    seeMoreAlbum.classList.remove("see_more_album_active");
    transitionTitleAlbum.classList.remove("album_transition_title_active");
    circleAlbum.classList.remove("album_stroke_green_circle1_active");
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/BezierPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js" integrity="sha512-ht40uOoiTef4nKq0THVzjIGh3VS108J577LVVgNXnQLXza3doXjoM3owin2vd+Hm6w88k12RIrePIVY2WNzz6Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" integrity="sha512-8Wy4KH0O+AuzjMm1w5QfZ5j5/y8Q/kcUktK9mPUVaUoBvh3QPUZB822W/vy7ULqri3yR8daH3F58+Y8Z08qzeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js" integrity="sha512-lJDBw/vKlGO8aIZB8/6CY4lV+EMAL3qzViHid6wXjH/uDrqUl+uvfCROHXAEL0T/bgdAQHSuE68vRlcFHUdrUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" referrerpolicy="no-referrer" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js" integrity="sha512-RvUydNGlqYJapy0t4AH8hDv/It+zKsv4wOQGb+iOnEfa6NnF2fzjXgRy+FDjSpMfC3sjokNUzsfYZaZ8QAwIxg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.js" integrity="sha512-judXDFLnOTJsUwd55lhbrX3uSoSQSOZR6vNrsll+4ViUFv+XOIr/xaIK96soMj6s5jVszd7I97a0H+WhgFwTEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="./js/script.js"></script>
<script src="./js/generateColor.js"></script>
<script src="./js/feedback.js"></script>
<script type="module" defer src="./js/app.js"></script>

</html>