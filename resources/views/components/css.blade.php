<style>
    /* Efek hover utama card */
    .hover-shadow {
        transition: all 0.5s ease;
        box-shadow: none;
        position: relative;
        overflow: hidden;
    }

    .hover-shadow:hover {
        transform: translateY(-15px);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.54);
        cursor: pointer;
    }

    /* Atur tinggi tetap biar konten tidak loncat-loncat */
    .card-body {
        position: relative;
        height: 110px;
        /* Atur sesuai kebutuhan tinggi konten */
    }

    /* Info produk: nama, kategori, harga */
    .card-info {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        transition: all 0.6s ease;
        z-index: 1;
    }

    /* Tombol lihat detail */
    .card-action {
        position: absolute;
        bottom: -30px;
        left: 0;
        right: 0;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.4s ease;
        z-index: 2;
    }

    /* Saat hover: info naik + tombol muncul */
    .hover-shadow:hover .card-info {
        opacity: 0;
        transform: translateY(-40px);
        pointer-events: none;
    }

    .hover-shadow:hover .card-action {
        opacity: 1;
        transform: translateY(0);
        bottom: 45px;
    }

    /* Tombol lihat detail */

    /* style detailproduk */
    @media (max-width: 576px) {
        .card {
            width: 90% !important;
            height: auto !important;
        }

        .card-img-top {
            height: 200px !important;
        }
    }

    /* detailproduk  */
    .bg-orange{
        background-color: orange !important;
    }
    .text-orange {
        color: orange !important;
    }


    /* KATEGORI STYLE */
    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        background-color: rgba(0, 0, 0, 0.4);
        /* abu-abu terang transparan */
        border-radius: 70%;
        padding: 20px;
        transition: all 0.3s ease;
    }

    /* Saat hover: putih terang */
    .carousel-control-next:hover .carousel-control-next-icon,
    .carousel-control-prev:hover .carousel-control-prev-icon {
        background-color: white;
        /* putih saat hover */
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        transform: scale(1);
    }

    .carousel-control-next:hover .carousel-control-next-icon,
    .carousel-control-prev:hover .carousel-control-prev-icon {
        transform: scale(2);
    }

    /* SCROLLING */
    .scroll-wrapper {
        overflow: hidden;
        position: relative;
    }

    .category-scroll {
        display: flex;
        animation: scroll-left 30s linear infinite;
        padding-bottom: 1rem;
        width: max-content;
    }

    .category-scroll:hover {
        animation-play-state: paused;
    }

    .category-scroll1 {
        display: flex;
        animation: scroll-left 40s linear infinite;
        padding-bottom: 1rem;
        width: max-content;
    }
    

    @keyframes scroll-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-5%);
        }
    }
</style>