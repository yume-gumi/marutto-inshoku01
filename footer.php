<footer class="footer">
    <div class="footer--inner common--inner">
        <div class="footer--main">
            <div class="footer--content">
                <div class="footer--logo">
                    <a href="<?= home_url('/'); ?>">
                        <img src="<?= get_theme_file_uri(); ?>/img/logo.svg" alt="cafe umbrella">
                    </a>
                </div>

                <dl class="footer--details">
                    <div class="footer--details--row">
                        <dt class="footer--details--label">住所</dt>
                        <dd class="footer--details--value">
                            〒000-0000<br>
                            大阪府大阪市〇〇区〇〇0-0-0<br>
                            <a class="footer--details--link" href="#" target="_blank" rel="noopener noreferrer">Googleマップを見る</a>
                        </dd>
                    </div>
                    <div class="footer--details--row">
                        <dt class="footer--details--label">アクセス</dt>
                        <dd class="footer--details--value">
                            〇〇駅徒歩5分<br>
                            駐車場あり
                        </dd>
                    </div>
                    <div class="footer--details--row">
                        <dt class="footer--details--label">TEL</dt>
                        <dd class="footer--details--value">
                            <a href="tel:00000000000">00-0000-0000</a>
                        </dd>
                    </div>
                    <div class="footer--details--row">
                        <dt class="footer--details--label">営業時間</dt>
                        <dd class="footer--details--value">9:00〜18:00</dd>
                    </div>
                    <div class="footer--details--row">
                        <dt class="footer--details--label">休業日</dt>
                        <dd class="footer--details--value">水曜日、年末年始</dd>
                    </div>
                </dl>

                <a class="footer--sns" href="#" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <rect x="2" y="2" width="20" height="20" rx="5" stroke="currentColor" stroke-width="1.5" />
                        <circle cx="12" cy="12" r="4.5" stroke="currentColor" stroke-width="1.5" />
                        <circle cx="17.5" cy="6.5" r="1" fill="currentColor" />
                    </svg>
                </a>
            </div>

            <div class="footer--aside">
                <nav class="footer--nav" aria-label="フッターナビゲーション">
                    <ul class="footer--nav--list">
                        <li class="footer--nav--item"><a href="<?= home_url('/'); ?>">TOP</a></li>
                        <li class="footer--nav--item"><a href="<?= home_url('/about/'); ?>">ABOUT US</a></li>
                        <li class="footer--nav--item"><a href="<?= home_url('/shop/'); ?>">SHOP</a></li>
                        <li class="footer--nav--item"><a href="<?= home_url('/menu/'); ?>">MENU</a></li>
                        <li class="footer--nav--item"><a href="<?= get_permalink(get_option('page_for_posts')); ?>">NEWS</a></li>
                    </ul>
                </nav>

                <a class="button footer--button" href="<?= home_url('/contact/'); ?>">
                    <svg class="button--icon" xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none" aria-hidden="true">
                        <rect x="1" y="1" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.5" />
                        <path d="M1 4L10 9L19 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>お問い合わせフォーム</span>
                </a>
            </div>
        </div>
        <div class="footer--bottom">
            <a class="footer--legal" href="<?= home_url('/privacy/'); ?>">プライバシーポリシー</a>
            <a class="footer--legal" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="19" viewBox="0 0 15 19" fill="none">
                    <path d="M11.9077 0H5.78237H5.30773L4.97232 0.335367L0.335367 4.97261L0 5.30798V5.7824V15.3427C0 17.048 1.38727 18.4355 3.09284 18.4355H11.9077C13.6127 18.4355 15 17.048 15 15.3427V3.09284C15 1.38727 13.6127 0 11.9077 0ZM13.8551 15.3427C13.8551 16.4185 12.9832 17.2903 11.9077 17.2903H3.09284C2.01681 17.2903 1.14494 16.4185 1.14494 15.3427V5.78237H4.15929C5.05532 5.78237 5.78237 5.05582 5.78237 4.15954V1.14516H11.9077C12.9832 1.14516 13.8551 2.01703 13.8551 3.09284V15.3427Z" fill="currentColor" />
                    <path d="M4.47354 9.10181H3.4463C3.25071 9.10181 3.13354 9.22902 3.13354 9.41957V12.0752C3.13354 12.3052 3.28492 12.4568 3.49509 12.4568C3.70072 12.4568 3.85206 12.3053 3.85206 12.0752V11.2684C3.85206 11.2488 3.86211 11.239 3.88173 11.239H4.47354C5.1971 11.239 5.63252 10.7988 5.63252 10.1728C5.63256 9.53698 5.20214 9.10181 4.47354 9.10181ZM4.42932 10.6178H3.88173C3.86211 10.6178 3.85206 10.608 3.85206 10.5886V9.7522C3.85206 9.73257 3.86211 9.72282 3.88173 9.72282H4.42932C4.7325 9.72282 4.91351 9.90382 4.91351 10.1728C4.91354 10.4418 4.7325 10.6178 4.42932 10.6178Z" fill="currentColor" />
                    <path d="M7.29083 9.10181H6.50343C6.30784 9.10181 6.19067 9.22902 6.19067 9.41957V12.1144C6.19067 12.3053 6.3078 12.4274 6.50343 12.4274H7.29083C7.9998 12.4274 8.44027 12.2024 8.61624 11.6596C8.67961 11.4688 8.71428 11.239 8.71428 10.7646C8.71428 10.2902 8.67957 10.0604 8.61624 9.86962C8.44023 9.32681 7.9998 9.10181 7.29083 9.10181ZM7.92689 11.4102C7.84342 11.6742 7.60408 11.7868 7.2712 11.7868H6.93886C6.91924 11.7868 6.90919 11.777 6.90919 11.7575V9.77182C6.90919 9.7522 6.91924 9.7424 6.93886 9.7424H7.2712C7.60408 9.7424 7.84342 9.85503 7.92689 10.119C7.96109 10.2317 7.98522 10.4273 7.98522 10.7646C7.98522 11.102 7.96106 11.2976 7.92689 11.4102Z" fill="currentColor" />
                    <path d="M11.2867 9.10181H9.67312C9.47753 9.10181 9.35986 9.22902 9.35986 9.41957V12.0752C9.35986 12.3052 9.51174 12.4568 9.72191 12.4568C9.92704 12.4568 10.0789 12.3053 10.0789 12.0752V11.1264C10.0789 11.107 10.0884 11.0972 10.108 11.0972H11.0473C11.2575 11.0972 11.3797 10.9701 11.3797 10.789C11.3797 10.608 11.2575 10.481 11.0473 10.481H10.108C10.0884 10.481 10.0789 10.4713 10.0789 10.4516V9.7522C10.0789 9.73257 10.0884 9.72282 10.108 9.72282H11.2867C11.4873 9.72282 11.6195 9.59082 11.6195 9.41485C11.6195 9.23377 11.4873 9.10181 11.2867 9.10181Z" fill="currentColor" />
                </svg>
                <span>特定商取引法に基づく表記</span>
            </a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="<?= get_theme_file_uri(); ?>/js/main.js"></script>
</body>

</html>