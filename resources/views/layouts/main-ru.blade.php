<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield('robots')
  <link rel="shortcut icon" href="{{ asset('/img/favicon.svg') }}" type="image/x-icon">
  <title>@yield('title', config('app.name') )</title>
  @yield('style')
  @vite(['resources/sass/main.scss'])
</head>

<body>
  <!-- 
  <div class="preloader">
    <div class="preloader-image">
      <svg width="758" height="148" viewBox="0 0 758 148" xmlns="http://www.w3.org/2000/svg">
        <path d="M150.126 92.4622H106.72L90.2266 135.915H108.862L119.25 108.632H156.307L150.126 92.4622Z"/>
        <path d="M159.425 19.0897H140.896L185.214 135.913H203.864L159.425 19.0897Z"/>
        <path d="M46.475 136.412C38.3751 136.464 30.3544 134.915 22.9345 131.867C16.1766 129.243 10.3184 124.925 6.00043 119.387C2.03656 114.107 -0.0616418 107.794 0.00137918 101.336V100.738H17.3455V101.336C17.2292 104.363 17.8804 107.372 19.2454 110.116C20.6104 112.86 22.6503 115.261 25.1974 117.122C31.3842 121.254 38.8741 123.312 46.4599 122.963C54.6915 122.963 61.0854 121.367 65.429 118.133C68.3947 115.805 70.4884 112.648 71.4038 109.123C72.3193 105.598 72.0085 101.891 70.5168 98.544C69.4927 96.3813 67.9302 94.4808 65.9606 93.0021C61.8903 90.0387 54.3573 87.0469 43.5742 84.1263C29.9055 80.4079 19.7299 75.7919 13.4423 70.3639C10.3795 67.8133 7.93919 64.6729 6.28796 61.1571C4.63674 57.6412 3.81341 53.8326 3.87418 49.9911C3.86331 45.655 4.9182 41.3749 6.95691 37.4833C8.99562 33.5918 11.9633 30.1935 15.6293 27.5524C23.3445 21.64 33.4898 18.6482 45.7612 18.6482C53.5491 18.5083 61.265 20.0691 68.2994 23.2071C74.6037 26.0122 79.9517 30.4074 83.7451 35.901C87.3314 41.1929 89.2238 47.339 89.1974 53.6097V54.3363H71.8229V53.7379C71.977 50.8193 71.459 47.9039 70.3042 45.1899C69.1488 42.4476 67.3652 39.9769 65.0797 37.9525C60.5235 34.1344 54.0992 32.2538 45.8068 32.2538C39.3936 31.9097 33.045 33.612 27.7945 37.0835C25.701 38.6304 24.0324 40.6247 22.928 42.8999C21.8236 45.1751 21.3155 47.6651 21.4461 50.162C21.4435 52.351 21.9953 54.5093 23.056 56.4591C24.1007 58.4182 25.6194 60.1209 27.4907 61.4312C31.5913 64.5655 38.6839 67.4861 48.6165 70.1217C56.8478 72.0463 64.784 74.9475 72.233 78.7553C77.4531 81.5117 81.8747 85.4247 85.112 90.1527C87.9986 94.8149 89.4545 100.135 89.3189 105.525C89.4333 109.896 88.4282 114.23 86.3881 118.161C84.348 122.093 81.3323 125.508 77.5942 128.12C69.8182 133.662 59.3388 136.412 46.475 136.412Z"/>
        <path d="M193.23 18.634H174.717L219.019 135.458H237.669L193.23 18.634Z"/>
        <path d="M303.527 38.3099C303.485 35.1061 304.114 31.9257 305.38 28.9498C306.608 26.1649 308.421 23.6405 310.711 21.5272C313.013 19.4273 315.733 17.7718 318.715 16.6548C321.915 15.4713 325.329 14.881 328.769 14.9167C332.159 14.8805 335.524 15.4711 338.671 16.6548C341.633 17.7604 344.325 19.4179 346.584 21.5272C348.87 23.6319 350.665 26.1596 351.854 28.9498C354.426 34.9321 354.426 41.6165 351.854 47.5988C350.655 50.405 348.862 52.9542 346.584 55.0926C344.325 57.2019 341.633 58.8594 338.671 59.965C335.524 61.1487 332.159 61.7393 328.769 61.7031C325.329 61.7388 321.915 61.1485 318.715 59.965C315.716 58.8595 312.989 57.193 310.699 55.067C308.409 52.9411 306.605 50.4 305.395 47.5988C304.128 44.6476 303.494 41.4912 303.527 38.3099ZM310.787 38.3099C310.74 41.3735 311.551 44.3951 313.141 47.0717C314.67 49.5744 316.882 51.6497 319.55 53.0838C322.354 54.576 325.531 55.3383 328.754 55.2921C331.948 55.3441 335.098 54.5808 337.866 53.0838C340.495 51.6444 342.661 49.5676 344.139 47.0717C345.728 44.3951 346.54 41.3735 346.493 38.3099C346.552 35.245 345.739 32.2207 344.139 29.5481C342.661 27.0522 340.495 24.9754 337.866 23.536C335.098 22.039 331.948 21.2758 328.754 21.3277C325.531 21.2815 322.354 22.0439 319.55 23.536C316.882 24.9701 314.67 27.0453 313.141 29.5481C311.546 32.2221 310.739 35.2463 310.802 38.3099H310.787ZM365.857 28.4226L367.558 37.2414V61.0335H360.435V28.4226H365.857ZM366.495 39.9768L364.778 39.2502V34.3635L365.416 33.637C366.018 32.6892 366.765 31.8299 367.634 31.0868C368.711 30.1408 369.935 29.3531 371.264 28.7503C372.56 28.105 374.003 27.7629 375.47 27.753C376.136 27.7497 376.801 27.7926 377.46 27.8813C377.999 27.9203 378.521 28.0817 378.979 28.3514V34.3635H376.777C374.326 34.1951 371.875 34.6896 369.714 35.7882C368.155 36.7885 367.021 38.2712 366.51 39.9768H366.495ZM397.811 74.2687C395.88 74.2817 393.959 74.0125 392.116 73.4709C390.333 72.9745 388.682 72.1297 387.271 70.992C385.714 69.6797 384.414 68.1224 383.429 66.3903L382.928 65.5212L388.547 62.6719C389.544 64.322 390.875 65.7737 392.465 66.9459C394.331 68.0541 396.536 68.5504 398.735 68.3571C400.933 68.1637 403.002 67.2916 404.615 65.8774C406.316 64.182 407.182 61.6034 407.182 58.0559V51.1035H407.896V34.9619H407.182L408.883 28.4226H414.396V56.9162C414.52 60.2493 413.758 63.559 412.179 66.547C410.905 68.9634 408.869 70.9532 406.347 72.2457C403.743 73.6048 400.806 74.3022 397.826 74.2687H397.811ZM396.976 58.982C393.994 59.0369 391.047 58.3644 388.425 57.0302C386.019 55.7676 384.044 53.8903 382.73 51.6164C381.347 49.0742 380.658 46.2496 380.725 43.396C380.651 40.5418 381.341 37.7157 382.73 35.1756C384.032 32.8754 386.008 30.9724 388.425 29.6906C391.038 28.329 393.988 27.6408 396.976 27.6961C399.806 27.6338 402.597 28.3254 405.025 29.6906C407.361 30.988 409.244 32.8935 410.447 35.1756C411.785 37.7305 412.447 40.5503 412.376 43.396C412.438 46.2409 411.777 49.0587 410.447 51.6164C409.233 53.8727 407.35 55.7525 405.025 57.0302C402.588 58.3704 399.8 59.0463 396.976 58.982ZM397.826 53.2833C399.14 53.3412 400.451 53.1318 401.67 52.6695C402.889 52.2072 403.987 51.5028 404.889 50.6049C406.754 48.6228 407.724 46.0372 407.592 43.396C407.723 40.7807 406.752 38.2221 404.889 36.2726C403.998 35.3571 402.904 34.6363 401.683 34.1612C400.463 33.6861 399.146 33.4682 397.826 33.523C396.505 33.4615 395.185 33.6677 393.956 34.1274C392.727 34.5871 391.617 35.2896 390.704 36.1871C388.948 38.2177 387.989 40.7528 387.989 43.3675C387.989 45.9822 388.948 48.5173 390.704 50.5479C391.617 51.4502 392.725 52.1605 393.952 52.632C395.18 53.1035 396.501 53.3254 397.826 53.2833ZM433.639 61.9738C431.231 62.0358 428.841 61.5776 426.652 60.6346C424.763 59.8214 423.176 58.4966 422.096 56.8307C421.054 54.9748 420.532 52.9013 420.577 50.8043C420.513 48.8097 421.039 46.8373 422.096 45.1056C423.174 43.3851 424.755 41.9907 426.652 41.088C428.793 40.0802 431.169 39.5905 433.563 39.6633C436.399 39.5273 439.204 40.279 441.536 41.8004C443.602 43.198 445.11 45.2042 445.819 47.4991H441.825V39.179C441.809 37.7832 441.272 36.4369 440.306 35.3751C439.621 34.7307 438.79 34.2398 437.875 33.9388C436.96 33.6378 435.984 33.5346 435.021 33.637C431.805 33.6851 428.632 34.3442 425.695 35.5745L423.66 30.4884C425.596 29.6058 427.635 28.9365 429.735 28.4939C431.727 28.0546 433.765 27.8299 435.81 27.8243C438.384 27.7059 440.947 28.2113 443.252 29.2917C445.118 30.2223 446.638 31.6632 447.611 33.4233C448.564 35.1883 449.049 37.1434 449.023 39.122V60.9765H443.905L442.113 55.0356L445.895 54.0241C445.196 56.4615 443.576 58.5777 441.339 59.9792C439.03 61.326 436.356 62.0186 433.639 61.9738ZM434.914 56.0186C436.713 56.0985 438.491 55.634 439.987 54.6937C440.613 54.2355 441.114 53.6434 441.447 52.9668C441.78 52.2902 441.935 51.5488 441.9 50.8043C441.943 50.0609 441.791 49.3191 441.457 48.6436C441.124 47.968 440.619 47.3795 439.987 46.9292C438.462 46.0541 436.709 45.591 434.922 45.591C433.134 45.591 431.382 46.0541 429.857 46.9292C429.223 47.3788 428.716 47.9668 428.38 48.6422C428.044 49.3176 427.889 50.0599 427.928 50.8043C427.896 51.5498 428.055 52.2916 428.39 52.9681C428.726 53.6446 429.229 54.2362 429.857 54.6937C431.348 55.632 433.121 56.0964 434.914 56.0186ZM477.758 27.753C479.786 27.6566 481.805 28.0697 483.605 28.9498C484.984 29.6544 486.081 30.7591 486.734 32.0983C487.429 33.4859 487.865 34.9748 488.025 36.5006C488.214 38.1901 488.311 39.8878 488.313 41.5867V61.0335H481.221V40.1762C481.221 37.8683 480.659 36.3011 479.52 35.5033C478.4 34.6916 477.017 34.2643 475.602 34.2923C474.039 34.3181 472.495 34.6126 471.045 35.1614C469.515 35.7236 468.094 36.5177 466.838 37.5121C465.664 38.4156 464.693 39.5296 463.983 40.7888V37.0419H465.122V61.0335H457.999V28.4226H463.421L464.94 34.1214L463.163 34.3208C464.438 32.9475 465.898 31.7358 467.507 30.7164C469.042 29.7449 470.727 29.0001 472.503 28.5081C474.202 28.0015 475.975 27.7467 477.758 27.753ZM504.397 61.0335H497.274V28.4226H504.397V61.0335ZM496.196 18.3929C496.143 17.2342 496.579 16.1028 497.411 15.2444C497.855 14.8221 498.389 14.4912 498.977 14.2729C499.565 14.0546 500.196 13.9536 500.828 13.9764C501.451 13.9537 502.072 14.0549 502.651 14.2734C503.229 14.4919 503.752 14.8229 504.184 15.2444C504.613 15.6608 504.947 16.1546 505.167 16.6958C505.386 17.237 505.486 17.8144 505.46 18.3929C505.494 19.555 505.035 20.6822 504.184 21.5272C503.742 21.9321 503.216 22.2483 502.639 22.4565C502.062 22.6646 501.446 22.7605 500.828 22.7382C500.2 22.7684 499.572 22.6764 498.984 22.468C498.396 22.2596 497.86 21.9393 497.411 21.5272C496.597 20.6646 496.163 19.5444 496.196 18.3929ZM538.721 54.8931V61.0335H511.839V55.8192L531.932 31.6851L534.286 34.5345H512.264V28.4226H538.417V33.637L518.248 57.7567L513.904 54.9074L538.721 54.8931ZM555.791 62.0165C553.384 62.0801 550.993 61.6218 548.805 60.6773C546.916 59.8641 545.329 58.5394 544.249 56.8734C543.2 55.02 542.677 52.9448 542.73 50.8471C542.666 48.8524 543.192 46.8801 544.249 45.1483C545.309 43.4398 546.862 42.047 548.729 41.1308C550.876 40.1246 553.256 39.635 555.655 39.7061C558.492 39.57 561.296 40.3217 563.628 41.8431C565.694 43.2408 567.202 45.2469 567.911 47.5418H563.917V39.179C563.908 37.7821 563.37 36.4337 562.398 35.3751C561.411 34.2068 559.649 33.637 557.128 33.637C553.907 33.6871 550.73 34.3461 547.788 35.5745L545.798 30.4884C547.734 29.6058 549.773 28.9365 551.873 28.4939C553.864 28.0546 555.902 27.8299 557.948 27.8243C560.518 27.7328 563.07 28.2627 565.359 29.3629C567.222 30.2937 568.737 31.735 569.703 33.4945C570.668 35.2562 571.158 37.2128 571.131 39.1932V61.0477H565.997L564.22 55.1068L568.002 54.0953C567.295 56.5294 565.678 58.6433 563.446 60.0505C561.14 61.3715 558.477 62.0394 555.776 61.9738L555.791 62.0165ZM557.067 56.0614C558.861 56.1432 560.635 55.6784 562.125 54.7364C562.756 54.2813 563.261 53.6902 563.596 53.0131C563.932 52.3361 564.089 51.5931 564.053 50.8471C564.097 50.1021 563.944 49.3586 563.607 48.6826C563.271 48.0065 562.761 47.4189 562.125 46.9719C560.603 46.0965 558.852 45.6331 557.067 45.6331C555.282 45.6331 553.532 46.0965 552.01 46.9719C551.373 47.4189 550.864 48.0065 550.527 48.6826C550.191 49.3586 550.037 50.1021 550.081 50.8471C550.049 51.5871 550.205 52.3237 550.538 52.9953C550.871 53.6669 551.37 54.2542 551.995 54.7079C553.486 55.6449 555.26 56.1047 557.052 56.0186L557.067 56.0614ZM591.816 61.7601C590.489 61.8222 589.161 61.6349 587.912 61.2092C586.663 60.7835 585.517 60.128 584.541 59.2811C582.78 57.5858 581.914 55.0071 581.914 51.4597V28.4226L583.266 21.0571H589.052V51.4739C589.004 51.9867 589.067 52.5033 589.236 52.9928C589.406 53.4824 589.679 53.9349 590.039 54.3233C590.754 54.9505 591.703 55.2884 592.682 55.2636C593.398 55.2691 594.114 55.2262 594.823 55.1353C595.377 55.054 595.925 54.9398 596.463 54.7934V61.0192C595.784 61.2058 595.095 61.358 594.398 61.4751C593.541 61.6163 592.671 61.6736 591.801 61.6461L591.816 61.7601ZM576.629 34.6912V28.4226H596.509V34.563L576.629 34.6912ZM611.833 61.0335H604.71V28.4226H611.833V61.0335ZM603.632 18.3929C603.579 17.2342 604.016 16.1028 604.847 15.2444C605.291 14.8221 605.825 14.4912 606.413 14.2729C607.002 14.0546 607.632 13.9536 608.264 13.9764C608.887 13.9537 609.508 14.0549 610.087 14.2734C610.665 14.4919 611.188 14.8229 611.621 15.2444C612.049 15.6608 612.384 16.1546 612.603 16.6958C612.822 17.237 612.922 17.8144 612.896 18.3929C612.93 19.555 612.472 20.6822 611.621 21.5272C611.178 21.9321 610.652 22.2483 610.075 22.4565C609.498 22.6646 608.882 22.7605 608.264 22.7382C607.636 22.7684 607.009 22.6764 606.421 22.468C605.832 22.2596 605.297 21.9393 604.847 21.5272C604.039 20.6625 603.61 19.5425 603.647 18.3929H603.632ZM636.801 61.7031C633.557 61.7656 630.348 61.0548 627.476 59.6373C624.845 58.2454 622.691 56.1799 621.265 53.6822C619.742 50.941 618.984 47.8825 619.062 44.7922C618.982 41.6789 619.739 38.5969 621.265 35.831C622.691 33.3371 624.846 31.2762 627.476 29.8901C630.334 28.4298 633.548 27.6932 636.801 27.753C640.061 27.6807 643.283 28.418 646.142 29.8901C648.764 31.2809 650.913 33.3409 652.338 35.831C653.911 38.5829 654.696 41.6706 654.616 44.7922C654.692 47.8908 653.907 50.9546 652.338 53.6822C650.913 56.1761 648.765 58.2407 646.142 59.6373C643.273 61.0637 640.062 61.775 636.817 61.7031H636.801ZM636.801 55.2921C638.211 55.3537 639.618 55.1313 640.928 54.6398C642.238 54.1483 643.42 53.3991 644.395 52.4427C646.289 50.2889 647.324 47.584 647.324 44.7922C647.324 42.0003 646.289 39.2955 644.395 37.1417C643.433 36.1627 642.256 35.3919 640.944 34.8826C639.633 34.3733 638.219 34.1379 636.801 34.1926C635.385 34.1473 633.974 34.3871 632.664 34.8958C631.354 35.4044 630.176 36.1702 629.208 37.1417C627.236 39.2319 626.211 41.9614 626.352 44.7494C626.219 47.5622 627.241 50.3156 629.208 52.4427C630.191 53.3928 631.377 54.1377 632.688 54.6286C633.999 55.1196 635.406 55.3457 636.817 55.2921H636.801ZM681.24 27.753C683.263 27.6578 685.276 28.0709 687.072 28.9498C688.451 29.6584 689.552 30.7615 690.216 32.0983C690.912 33.4844 691.344 34.9744 691.491 36.5006C691.688 38.1896 691.785 39.8876 691.78 41.5867V61.0335H684.733V40.1762C684.733 37.8683 684.156 36.3011 683.017 35.5033C681.897 34.6916 680.514 34.2643 679.098 34.2923C677.536 34.3181 675.991 34.6126 674.542 35.1614C673.014 35.7263 671.593 36.5202 670.335 37.5121C669.161 38.4121 668.195 39.527 667.495 40.7888V37.0419H668.634V61.0335H661.496V28.4226H666.918L668.437 34.1214L666.645 34.3208C667.921 32.9438 669.387 31.7317 671.004 30.7164C672.534 29.745 674.214 29.0002 675.985 28.5081C677.69 28.0025 679.467 27.7478 681.255 27.753H681.24ZM328.055 135.772C323.544 135.865 319.087 134.827 315.146 132.766C311.543 130.76 308.587 127.875 306.595 124.417C304.529 120.705 303.485 116.566 303.558 112.379C303.515 109.175 304.145 105.995 305.411 103.019C306.584 100.255 308.323 97.7333 310.529 95.5962C312.754 93.5082 315.397 91.8525 318.305 90.7238C321.406 89.5473 324.725 88.9566 328.07 88.9857C332.817 88.7974 337.52 89.9114 341.602 92.1912C345.172 94.3447 348.132 97.2778 350.229 100.739L343.243 102.677C341.491 100.21 339.055 98.2395 336.196 96.9781C333.633 95.9349 330.864 95.4106 328.07 95.4394C324.963 95.398 321.905 96.1622 319.231 97.6477C316.689 99.128 314.596 101.199 313.156 103.66C311.601 106.346 310.816 109.365 310.878 112.422C310.828 115.477 311.612 118.493 313.156 121.183C314.596 123.644 316.689 125.715 319.231 127.196C321.905 128.681 324.963 129.445 328.07 129.404C331.049 129.441 333.989 128.775 336.621 127.466C339.152 126.196 341.287 124.33 342.817 122.052C344.353 119.722 345.144 117.027 345.096 114.288L346.159 118.177H327.63V111.894H351.444C351.589 112.393 351.685 112.904 351.732 113.419C351.822 113.975 351.867 114.537 351.869 115.1C351.889 117.862 351.284 120.596 350.092 123.121C348.891 125.621 347.166 127.869 345.02 129.731C342.832 131.687 340.25 133.212 337.426 134.219C334.436 135.292 331.256 135.819 328.055 135.772ZM363.229 102.492L364.93 111.31V135.102H357.807V102.492H363.229ZM363.867 114.046L362.151 113.319V108.433L362.789 107.706C363.39 106.758 364.138 105.899 365.006 105.156C366.081 104.207 367.305 103.419 368.636 102.819C369.932 102.174 371.376 101.832 372.843 101.822C373.509 101.819 374.174 101.862 374.833 101.95C375.372 101.989 375.893 102.151 376.351 102.42V108.433H374.134C371.688 108.265 369.242 108.76 367.087 109.857C365.522 110.855 364.382 112.338 363.867 114.046ZM395.548 135.772C392.299 135.836 389.085 135.125 386.208 133.706C383.581 132.314 381.432 130.248 380.012 127.751C378.476 124.998 377.713 121.924 377.794 118.818C377.718 115.704 378.481 112.622 380.012 109.857C381.437 107.367 383.585 105.307 386.208 103.916C389.07 102.454 392.29 101.718 395.548 101.779C398.803 101.709 402.02 102.446 404.873 103.916C407.504 105.302 409.659 107.363 411.085 109.857C412.658 112.609 413.443 115.697 413.363 118.818C413.439 121.917 412.654 124.981 411.085 127.708C409.664 130.209 407.508 132.276 404.873 133.664C402.009 135.105 398.798 135.831 395.548 135.772ZM395.548 129.361C396.957 129.421 398.364 129.198 399.673 128.706C400.983 128.215 402.166 127.467 403.142 126.512C405.028 124.354 406.058 121.651 406.058 118.861C406.058 116.071 405.028 113.368 403.142 111.211C402.18 110.232 401.002 109.462 399.691 108.953C398.38 108.444 396.966 108.208 395.548 108.262C394.131 108.214 392.72 108.453 391.41 108.962C390.1 109.471 388.921 110.238 387.955 111.211C385.98 113.305 384.956 116.04 385.099 118.833C384.966 121.641 385.988 124.39 387.955 126.512C388.935 127.461 390.118 128.206 391.427 128.697C392.736 129.188 394.14 129.414 395.548 129.361ZM430.723 135.772C428.586 135.866 426.456 135.48 424.511 134.647C423.09 133.929 421.928 132.834 421.17 131.498C420.437 130.09 419.955 128.579 419.742 127.025C419.553 125.335 419.456 123.637 419.453 121.938V102.492H426.546V123.349C426.546 125.657 427.093 127.224 428.186 128.022C429.339 128.828 430.743 129.254 432.181 129.233C433.744 129.215 435.29 128.92 436.737 128.364C438.267 127.802 439.688 127.007 440.944 126.013C442.119 125.111 443.09 123.997 443.799 122.736V126.483H442.66V102.492H449.783V135.102H444.467L442.948 129.404L444.725 129.204C443.515 130.564 442.128 131.775 440.594 132.809C439.121 133.766 437.517 134.533 435.826 135.088C434.17 135.554 432.45 135.784 430.723 135.772ZM476.589 135.772C473.705 135.837 470.862 135.12 468.403 133.706C466.021 132.233 464.119 130.172 462.905 127.751C461.572 124.958 460.918 121.921 460.991 118.861C460.915 115.778 461.569 112.718 462.905 109.9C464.124 107.485 466.025 105.43 468.403 103.959C470.846 102.503 473.695 101.76 476.589 101.822C479.514 101.741 482.401 102.463 484.896 103.897C487.391 105.332 489.386 107.418 490.637 109.9C492.02 112.705 492.701 115.771 492.627 118.861C492.699 121.928 492.018 124.97 490.637 127.751C489.4 130.198 487.446 132.264 485.003 133.706C482.485 135.116 479.596 135.831 476.665 135.772H476.589ZM458.986 147.811V102.492H464.408L466.125 109.031H465.411V127.623H466.125V147.811H458.986ZM475.526 130.031C476.886 130.071 478.238 129.814 479.474 129.28C480.71 128.745 481.797 127.949 482.649 126.953C484.412 124.568 485.357 121.735 485.357 118.833C485.357 115.93 484.412 113.097 482.649 110.712C481.789 109.733 480.71 108.943 479.489 108.398C478.268 107.854 476.934 107.568 475.581 107.561C474.229 107.555 472.892 107.827 471.664 108.359C470.437 108.891 469.349 109.67 468.479 110.641C466.708 113.037 465.76 115.882 465.76 118.797C465.76 121.712 466.708 124.558 468.479 126.953C469.317 127.945 470.391 128.74 471.614 129.274C472.837 129.808 474.177 130.067 475.526 130.031Z"/>
        <path d="M745.478 1.49548C750.395 3.46742 754.311 7.14139 756.413 11.7531C757.461 14.1094 758 16.637 758 19.19C758 21.7429 757.461 24.2706 756.413 26.6268C755.381 28.91 753.897 30.9887 752.039 32.7529C750.173 34.5295 747.954 35.9475 745.509 36.9272C742.993 37.9146 740.293 38.4231 737.566 38.4231C734.838 38.4231 732.138 37.9146 729.623 36.9272C727.179 35.9439 724.961 34.5265 723.092 32.7529C721.234 30.9887 719.75 28.91 718.718 26.6268C717.67 24.2706 717.131 21.7429 717.131 19.19C717.131 16.637 717.67 14.1094 718.718 11.7531C719.755 9.47006 721.25 7.39517 723.122 5.64128C724.991 3.89386 727.19 2.48798 729.607 1.49548C732.105 0.508468 734.787 0 737.497 0C740.207 0 742.89 0.508468 745.387 1.49548H745.478ZM745.159 31.6844C747.403 30.446 749.262 28.6777 750.551 26.5555C751.902 24.341 752.594 21.8268 752.556 19.2754C752.573 16.7102 751.86 14.187 750.49 11.9669C749.201 9.84471 747.343 8.07637 745.099 6.83802C742.801 5.60341 740.199 4.95389 737.55 4.95389C734.902 4.95389 732.3 5.60341 730.002 6.83802C727.694 8.11485 725.786 9.94198 724.474 12.1339C723.162 14.3258 722.491 16.8045 722.53 19.3182C722.491 21.8751 723.2 24.3932 724.58 26.5983C725.888 28.7164 727.755 30.4828 730.002 31.7271C732.3 32.9617 734.902 33.6113 737.55 33.6113C740.199 33.6113 742.801 32.9617 745.099 31.7271L745.159 31.6844ZM737.323 23.2503C739.637 23.3624 741.923 22.7345 743.808 21.4694C744.57 20.8154 745.178 20.0197 745.594 19.133C746.011 18.2464 746.226 17.2881 746.226 16.3192C746.226 15.3504 746.011 14.3921 745.594 13.5054C745.178 12.6188 744.57 11.8231 743.808 11.169C741.912 9.9302 739.63 9.31868 737.323 9.43093H730.245V28.3079H735.136V12.0951L733.328 13.7334H737.49C739.874 13.7334 741.059 14.6025 741.059 16.3406C741.059 18.0787 739.874 18.9335 737.49 18.9335H733.632V23.2076L737.323 23.2503ZM741.484 20.7856H736.077L740.633 28.3079H745.873L741.484 20.7856Z"/>
      </svg>
    </div>
  </div>
   -->

  <header class="header">
    <div class="header-top">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-2">
            <div class="name">Международная выставка</div>
          </div>
          <div class="col-md-9">
            <div class="cities-menu-wrapper">
              <div class="cursor">
                <img src="/img/header-cursor.svg" alt="">
              </div>
              <div class="cities-menu">
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Москва</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Санкт-Петербург</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Дубай</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Анталья</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Алания</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Лимассол</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Баку</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <div class="lang-select">
              <div class="lang-select-text">
                <a href="/" class="lang-select-link">ru</a>
              </div>
              <div class="lang-select-dropdown">
                <a href="/en" class="lang-select-link">en</a>
                <a href="/tr" class="lang-select-link">tr</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="underline-wrapper">
      <div class="container-xl">
        <div class="underline"></div>
      </div>
    </div>

    <div class="header-bottom">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-2">
            <div class="logo">
              <a href="/">
                <img src="/img/logo.svg" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-8">
            <div class="top-menu">
              <ul class="menu">
                <li class="menu-item">
                  <a href="/" class="menu-item-link">Главная</a>
                </li>
                <li class="menu-item">
                  <a href="/for-participants" class="menu-item-link">Экспонентам</a>
                </li>
                <li class="menu-item">
                  <a href="/poster" class="menu-item-link">Афиша</a>
                </li>
                <li class="menu-item">
                  <a href="/participants" class="menu-item-link">Участники</a>
                </li>
                <li class="menu-item">
                  <a href="/contacts" class="menu-item-link">Контакты</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <div class="phone-wrapper">
              <div class="phone-img">
                <img src="/img/header-phone.svg" alt="">
              </div>
              <div class="phone-text">
                <a href="tel:+78002700700">8 800 2700 700</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      
    </div>
    
  </header>

  <div class="content-wrapper">

    @yield('content')

  </div>


  <footer class="footer">
    <div class="container-xl">
      <div class="footer-logo">
        <img src="/img/footer-logo.svg" alt="">
      </div>
      <div class="footer-menu">
        <div class="footer-menu-contacts">
          <div class="phone">
            <a href="tel:+78002700700">8 800 2700 700</a>
          </div>
          <div class="email">
            <a href="mailto:support@luxpropertyexpo.com">support@luxpropertyexpo.com</a>
          </div>
          <div class="address">Москва, Столярный переулок</div>
          <div class="working-time">Мы работаем с 08:00 до 20:00</div>
          <div class="socials">
            <a href="" class="social-item">
              <img src="/img/footer-telegram.svg" alt="">
            </a>
            <a href="" class="social-item">
              <img src="/img/footer-whatsapp.svg" alt="">
            </a>
            <a href="" class="social-item">
              <img src="/img/footer-facebook.svg" alt="">
            </a>
            <a href="" class="social-item">
              <img src="/img/footer-youtube.svg" alt="">
            </a>
            <a href="" class="social-item">
              <img src="/img/footer-twitter.svg" alt="">
            </a>
          </div>
        </div>
        <div class="footer-menu-item for-participant">
          <div class="footer-menu-item__title">Для участников</div>
          <div class="nav">
            <a href="/#description-section" class="nav-item">Что такое Luxury Property Expo</a>
            <a href="/participants#projects-section" class="nav-item">Проекты и страны</a>
            <a href="/#advantages-section" class="nav-item">Преимущества выставки</a>
            <a href="/participants#participants-section" class="nav-item">Участники</a>
          </div>
        </div>
        <div class="footer-menu-item for-expo">
          <div class="footer-menu-item__title">Для экспонентов</div>
          <div class="nav">
            <a href="/#description-section" class="nav-item">Что такое Luxury Property Expo</a>
            <a href="/participants#participants-section" class="nav-item">Участники</a>
            <a href="/for-participants#advertising-section" class="nav-item">Рекламная кампания</a>
            <a href="/for-participants" class="nav-item">Стать экспонентом</a>
          </div>
        </div>
        <div class="footer-menu-item events">
          <div class="footer-menu-item__title">Афиша</div>
          <div class="nav">
            <a href="/event" class="nav-item">Москва</a>
            <a href="/event" class="nav-item">Анталия</a>
            <a href="/event" class="nav-item">Дубай</a>
            <a href="/event" class="nav-item">Лимассол</a>
            <a href="/event" class="nav-item">Баку</a>
            <a href="/event" class="nav-item">Санкт-Петербург</a>
          </div>
        </div>
        <div class="footer-menu-item info">
          <div class="footer-menu-item__title">Информация</div>
          <div class="nav">
            <a href="/halal" class="nav-item">Халяль подробно</a>
            <a href="/#partners-section" class="nav-item">Наши партнеры</a>
            <a href="/faq" class="nav-item">Частые вопросы</a>
            <a href="#" class="nav-item">Личный кабинет</a>
            <a href="/contacts" class="nav-item">Контакты</a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="row">
          <div class="col-md-3">
            <div class="copyright">© 2023 SA ORGANIZATION GROUP</div>
          </div>
          <div class="col-md-6">
            <div class="privacy-policy">
              <a href="/privacy-policy">Политика конфиденциальности</a>
            </div>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </div>
  </footer>

  <div class="burger-menu-wrapper">
    <div class="burger-menu">
      <span class="span"></span>
    </div>
  </div>

  <div class="mobile-menu">

    <ul class="menu">
      <li class="menu-item {{ Route::is('company') ? 'active' : '' }}">
        <a href="/company">КОМПАНИЯ</a>
      </li>
      <li class="menu-item {{ Route::is('services') ? 'active' : '' }}">
        <a href="/services">УСЛУГИ</a>
      </li>
      <li class="menu-item {{ Route::is('payment') ? 'active' : '' }}">
        <a href="/payment">ОПЛАТА</a>
      </li>
      <li class="menu-item {{ Route::is('delivery') ? 'active' : '' }}">
        <a href="/delivery">ДОСТАВКА</a>
      </li>
      <li class="menu-item {{ Route::is('warranty') ? 'active' : '' }}">
        <a href="/warranty">ГАРАНТИЯ</a>
      </li>
      <li class="menu-item {{ Route::is('calculators') ? 'active' : '' }}">
        <a href="/calculators">КАЛЬКУЛЯТОРЫ</a>
      </li>
      <li class="menu-item">
        <a href="/contacts {{ Route::is('contacts') ? 'active' : '' }}">КОНТАКТЫ</a>
      </li>
    </ul>

    <div class="secondary-btn callback-btn js-callback-btn">Оставить заявку</div>

    <div class="info">
      <div class="phone">+7 (982) 292-88-79</div>
      <div class="phone">8 (800) 575-55-88</div>
    </div>          

  </div>

  <div id="callback-modal" class="modal-window callback-modal">
    <div class="modal-wrapper">
      <div class="modal-area">
        <div class="container-xl">
          <div class="modal-close-wrapper">
            <div class="modal-close">
              <div class="close"></div>
            </div>
          </div>
        </div>
        
        <div class="labels">
          <div class="container-xl">
            <div class="row">
              <div class="col-md-4">
                <div class="labels-item">
                  <div class="labels-item__image">
                    <img src="/img/ticket-label-form.svg" alt="">
                  </div>
                  <div class="labels-item__title">Оставьте заявку на<br> участие в выставке</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="labels-item">
                  <div class="labels-item__image">
                    <img src="/img/ticket-label-get.svg" alt="">
                  </div>
                  <div class="labels-item__title">С вами свяжется VIP-<br>менеджер и расскажет про условия участия</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="labels-item">
                  <div class="labels-item__image">
                    <img src="/img/ticket-label-show.svg" alt="">
                  </div>
                  <div class="labels-item__title">Подпишем документы и<br> начнем готовить ваш<br> стенд к выставке</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ticket-wrapper">
          <div class="container-xl">
            <div class="ticket">
              <div class="ticket-text-string">выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция</div>
              <div class="ticket-logo">
                <img src="/img/logo.svg" alt="">
              </div>
              <div class="ticket-title">ОСТАВЬ ЗАЯВКУ ПРЯМО СЕЙЧАС И<br><span class="accent">СТАНЬ УЧАСТНИКОМ ВЫСТАВКИ</span></div>
              <div class="ticket-right-text ticket-seats-counter">ОСТАЛОСЬ ВСЕГО<br><span class="accent"><span class="accentcolor">17</span> ИЗ 50 МЕСТ</span></div>
              <form class="form callback-form">
                <div class="flex-container">
                  <input type="text" name="name" id="modal-ticket-name" class="input-field" required placeholder="Представьтесь">
                  <input type="text" name="phone" id="modal-ticket-phone" class="input-field js-input-phone-mask" required placeholder="Телефон">
                  <input type="email" name="email" id="modal-ticket-email" class="input-field" required placeholder="Email">
                  <button type="button" class="callback-submit-btn primary-btn">ПОЛУЧИТЬ</button>
                </div>
                <div class="checkbox-wrapper">
                  <input type="checkbox" name="ticket-checkbox" class="custom-checkbox js-checkbox-callback-modal" id="modal-ticket-checkbox" checked required>
                  <label for="modal-ticket-checkbox" class="custom-checkbox-label"></label>
                  <span class="checkbox-text">Я принимаю пользовательское соглашение и подтверждаю, что ознакомлен<br> и согласен с <a href="/privacy-policy" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a> данного сайта.</span>
                </div>
              </form>
              <div class="ticket-label">
                <img src="/img/ticket-label.png" class="ticket-label-image" alt="">
                <span class="ticket-label-text">электронный билет</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

<!-- 
  @ if(!request()->cookie('we-use-cookie'))
    <div class="we-use-cookie">
      <div class="we-use-cookie-wrapper">
        <div class="we-use-cookie-text">Этот сайт использует cookie-файлы и другие технологии для улучшения его работы. Продолжая работу с сайтом, вы разрешаете использование cookie-файлов. Вы всегда можете отключить файлы cookie в настройках Вашего браузера.</div>
        <button class="primary-btn btn-195 we-use-cookie-close">ХОРОШО</button>
      </div>
    </div>
  @ endif

  <div class="fixed-bottom-menu">
    <div class="menu-wrapper">
      <div class="menu-item">
        <div class="menu-item__image">
          <img src="/img/fixed-bottom-menu-house.svg" alt="">
        </div>
        <div class="menu-item__title">Главная</div>
        <a href="/" class="full-link"></a>
      </div>
      <div class="menu-item">
        <div class="menu-item__image">
          <img src="/img/fixed-bottom-menu-rectangle.svg" alt="">
        </div>
        <div class="menu-item__title">Каталог</div>
        <a href="/catalog" class="full-link"></a>
      </div>
      <div class="menu-item cart-menu-item">
        <div class="menu-item__image">
          <img src="/img/fixed-bottom-menu-cart.svg" alt="">
        </div>
        <div class="menu-item__title">Корзина</div>
        <div id="mobile-cart-counter" class="badge-counter {{ isset($cart_count) ? 'active' : '' }}">{{ isset($cart_count) ? $cart_count : '' }}</div>
        <a href="/cart" class="full-link"></a>
      </div>
      <div class="menu-item cart-menu-item">
        <div class="menu-item__image">
          <img src="/img/fixed-bottom-menu-heart.svg" alt="">
        </div>
        <div class="menu-item__title">Избранное</div>
        <div id="mobile-favourites-counter" class="badge-counter {{ isset($favourites_count) ? 'active' : '' }}">{{ isset($favourites_count) ? $favourites_count : '' }}</div>
        <a href="/favourites" class="full-link"></a>
      </div>
      <div class="menu-item cart-menu-item">
        <div class="menu-item__image">
          <img src="/img/fixed-bottom-menu-chart.svg" alt="">
        </div>
        <div class="menu-item__title">Сравнение</div>
        <div id="mobile-comparison-counter" class="badge-counter {{ isset($comparison_count) ? 'active' : '' }}">{{ isset($comparison_count) ? $comparison_count : '' }}</div>
        <a href="/comparison" class="full-link"></a>
      </div>
    </div>
  </div>

  @ if(Auth::guard('admin')->user())
    <div class="top-line-is-login">
      <div class="container-fluid">
        <div class="text-wrapper">
          <div class="top-line__text dashboard">
            <a href="/admin">Панель управления</a>
          </div>
          <div class="top-line__text logout">
            <form class="form" action="{{-- route('admin.logout') --}}" method="POST">
              @csrf
              <button class="logout-btn" type="submit">Выйти</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  @ endif
 -->

  @yield('script')
  @vite(['resources/js/main.js'])

</body>
</html>
