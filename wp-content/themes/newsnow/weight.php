<?php /* Template Name: WEIGHT */
get_header();
?>
<div class="content-area">
    <main id="main" class="site-main">
        <div class="content-block content-block-1 clear">
            <div class="section-heading">
                <h3 class="section-title">Tính cân nặng lý tưởng
                </h3>
            </div>
            <div class="page-content">
                <h4>Cân nặng dựa trên chiều cao và chỉ số BMI cân bằng</h4>
                <div id="bmi-request-form" class="bmi-request-form clear">
                    <div class="bmi-form">
                        <p>
                            <label for="">Chiều cao (centimet)</label>
                            <input id="bmi-height" type="number" min="15" max="300" class="bmi-input"/>
                        </p>
                        <p>
                            <button id="btn-weight-submit" type="button"
                                    class="submit-btn">Tính toán
                            </button>
                        </p>
                    </div>
                </div>
                <div id="weight-result" class="bmi-notice" style="display: none">
                    <h4 style="text-align: center; text-transform: uppercase">Cân nặng lý tưởng của bạn</h4>
                    <h5 style="text-align: center;; text-transform: uppercase">Bạn nên duy trì thể trạng của mình ở mức
                        từ <span
                                class="weight-min" style="color: green"></span> (kg) đến tối đa <span class="weight-max"
                                                                                                      style="color:red"></span>
                        (kg)
                    </h5>
                    <p> Với mỗi người trưởng thành, đều nên xác định cho mình cân nặng lý tưởng tốt nhất cho sức khỏe và
                        nên duy trì cơ thể ở tình trạng cơ thể đó. Để xác định cân nặng lý tưởng ở mỗi người, ta dựa vào
                        công thức tính chỉ số BMI (Body Mass Index – chỉ số khối cơ thể)</p>
                    <p>Như vậy, mỗi người nên để chỉ số BMI của mình trong khoảng từ 18.5 – 23 là tốt nhất cho sức khỏe.
                        Cân nặng cụ thể mỗi người mong muốn đạt được sẽ phụ thuộc vào: giới tính, tuổi tác, đặc điểm hệ
                        cơ xương của cơ thể, quan niệm thẩm mỹ…</p>
                    <p>Các chuyên gia Y tế khuyến cáo rằng: Bạn nên duy trì cân nặng lý tưởng ổn định trong suốt tuổi
                        trưởng thành của mình ( từ 20 - 60 tuổi) điều này không chỉ có ý nghĩa về mặt thẩm mỹ mà nó sẽ
                        giúp bạn cải thiện chất lượng cuộc sống và tránh được rất nhiều nguy cơ bệnh tật . </p>
                    <button type="button" onclick="reset_form()">Kiểm tra lại</button>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(() => {
                jQuery('#btn-weight-submit').click(() => {
                    let h = jQuery('#bmi-height').val();
                    if (h.length === 0) return;
                    h = parseFloat(h);
                    h = (h / 100);
                    jQuery('.weight-min').text((18.5 * h * h).toFixed(0).toLocaleString());
                    jQuery('.weight-max').text((23 * h * h).toFixed(0).toLocaleString());
                    jQuery('.bmi-notice').css('display', 'block');
                    document.getElementById('weight-result').scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
                })
            })

            function reset_form() {
                jQuery('#bmi-height').val('');
                jQuery('.bmi-notice').css('display', 'none');
                document.getElementById('bmi-request-form').scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
            }
        </script>
    </main>
</div>
<?php get_footer(); ?>
