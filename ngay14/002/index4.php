<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        sử dụng vòng lặp for in ra thẻ 
        select form để chọn ngày , tháng , năm sinh
        ngày từ 1 đến 31
        tháng từ 1 đến 12
        năm sinh từ 1900 đến 2020
    </pre>

    <form action="">
        <label>sinh nhật</label>

        <select name="ngay">
            <option value="">Chọn ngày sinh</option>
            <?php 
            for ($ngay = 1; $ngay <= 31; $ngay++) {
                ?>
               <option value="<?php echo $ngay; ?>"><?php echo "Ngày ".$ngay; ?></option>
            <?php }
            ?>
        </select>

        <select name="thang">
            <option value="">Chọn tháng sinh</option>
        </select>

        <select name="nam">
            <option value="">Chọn năm sinh</option>
        </select>
    </form>

    <?php 
    for ($i = 1; $i <= 20; $i++) {
        
       echo ' <article class="article-item  type-text" article-id="1151946" topic-id="" serie-id="" data-tracker="zingweb_category_category728_newslatest_4">
       <p class="article-thumbnail">
               <a href="/viet-nam-ra-soat-nha-nhap-khau-thep-tu-trung-quoc-han-quoc-post1151946.html">
                   
                   <img src="https://znews-photo.zadn.vn/w480/Uploaded/bfjysesfzyr/2020_11_11/2652_q_1466482416107.jpg" alt="Viet Nam ra soat nha nhap khau thep tu Trung Quoc, Han Quoc hinh anh" class="unveil">
               </a>
           </p>
           <header>
               <p class="article-title">
                   <a href="/viet-nam-ra-soat-nha-nhap-khau-thep-tu-trung-quoc-han-quoc-post1151946.html">Việt Nam rà soát nhà nhập khẩu thép từ Trung Quốc, Hàn Quốc</a>
               </p>
               <p class="article-meta">
                   <span class="article-publish">
                       <span class="friendly-time">11 giờ trước</span>
                       <span class="time">09:55</span>
                       <span class="date">12/11/2020</span>
                   </span>
       
                   
                   <a href="/kinh-doanh-tai-chinh.html" title="Kinh doanh">
                       <span class="category-parent">Kinh doanh</span>
                   </a>
                   
       
                   
                   <a href="/tieu-dung.html" title="Tiêu dùng">
                       <span class="category">Tiêu dùng</span>
                   </a>
                   
               </p>
               <p class="article-count">
                   <span class="like-count"></span>
                   <span class="dislike-count"></span>
                   <span class="rating-count">0</span>
                   <span class="viral-count hide"></span>
                   <span class="comment-count hide"></span>
               </p>
               <p class="article-summary">Bộ Công Thương vừa ban hành quyết định rà soát nhà xuất khẩu mới trong vụ việc áp dụng thuế chống bán phá giá một số sản phẩm thép nhập khẩu từ Trung Quốc, Hàn Quốc.</p>
               
           </header>
       <img class="tracking unveil" alt="" src="//log.zingnews.vn/imps?type=article&amp;appid=zingweb&amp;id=1151946&amp;pos=zingweb_category_category728_newslatest_4">
       </article>';
    }

    ?>

   



</body>
</html>