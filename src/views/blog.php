
<?php 
require __DIR__.'/layouts/header.php';
$posts = getPosts();
?>

<section class="min-h-screen grid grid-cols-1 lg:grid-cols-6 items-center bg-[#0F1316] p-4">
    <div class=" container hidden flex-col bg-[#242527] lg:flex lg:col-span-2">
        <div class="container flex flex-col h-full"></div>
    </div>
    <div class="min-h-screen  lg:flex lg:col-span-3 flex-col items-center bg-[#0F1316] mr-4">
        <input type="text" placeholder="Qué has escuchado?" class="input bg-[#3C3E42] text-white my-4 w-full lg:max-w-4xl box-border" />
        <?php foreach($posts as $post) : ?>
        <div class="card w-full lg:max-w-4xl shadow-sm my-4 bg-[#242527] text-white">
            <div class="card-body">
                <div class="container flex flex-row justify-center items-center">
                    <div class="avatar">
                        <div class="h-27 rounded">
                        <img src="<?=ASSETS_PATH?>/images/<?=$post['cover-img']?>" />
                        </div>
                    </div>
                    <div class="container flex flex-col p-4 gap-2">
                        <div class="container flex justify-center">
                            <p class="text-lg text-white font-bold"><?=$post['album-title']?></p>
                        </div>
                        <div class="container flex justify-center">
                            <p class="text-lg text-white opacity-0.2 justify-start"><?=$post['artist']?></p>
                        </div>
                        <div class="container flex justify-center">
                            <p class="text-md text-white opacity-0.2 justify-start"><?=$post['type-review']?></p>
                        </div>
                    </div>
                </div>
                <div class="rating rating-lg rating-half">
                    <input type="radio" name="rating-11" class="rating-hidden" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 mask-half-1 bg-yellow-500" aria-label="0.5 star" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 mask-half-2 bg-yellow-500" aria-label="1 star" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 mask-half-1 bg-yellow-500" aria-label="1.5 star" checked="checked" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 mask-half-2 bg-yellow-500" aria-label="2 star" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 mask-half-1 bg-yellow-500" aria-label="2.5 star" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 mask-half-2 bg-yellow-500" aria-label="3 star" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 mask-half-1 bg-yellow-500" aria-label="3.5 star" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 mask-half-2 bg-yellow-500" aria-label="4 star" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 mask-half-1 bg-yellow-500" aria-label="4.5 star" />
                    <input type="radio" name="rating-11" class="mask mask-star-2 mask-half-2 bg-yellow-500" aria-label="5 star" />
                </div>
                <div class="container flex gap-3 items-center">
                    <div class="avatar flex">
                        <div class="w-13 rounded-full">
                        <img src="<?=$post['user-img']?>" />
                        </div>
                    </div>
                    <div class="container flex">
                        <p class="text-white text-sm"><?=$post['user-name']?></p>
                    </div>
                </div>
                <h2 class="card-title"><?=$post['review-title']?></h2>
                <p class="text-justify"><?=$post['text']?></p>
                <div class="card-actions justify-end gap-6">
                    <button class="btn rounded-3xl bg-[#3C3E42] text-white box-shadow-0 border-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-[1.2em]"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>
                        <?=$post['likes']?>
                    </button>
                    <button class="btn rounded-3xl bg-[#3C3E42] text-white box-shadow-0 border-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-[1.2em]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>
                        <?=$post['comments']?>
                    </button>
            </div>
            </div>
        </div>
        <?php endforeach; ?>
</section>

<?php include '../views/layouts/side-bar.php'; ?>
<?php include '../views/layouts/footer.php'; ?>