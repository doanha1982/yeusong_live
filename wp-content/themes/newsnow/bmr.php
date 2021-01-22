<?php /* Template Name: BMR */
get_header();
?>
    <div class="content-area">
        <main id="main" class="site-main">
            <div class="content-block clear">
                <div class="section-heading">
                    <h3 class="section-title">Tính mức tiêu hao năng lượng
                    </h3>
                </div>
                <div class="bmr-form page-content clear">
                    <h4>Công cụ tính BMR (Basal Metabolic Rate) dùng để tính chỉ số tiêu hao năng lượng cơ bản tự có.</h4>
                    <div id="bmr-request-form" class="bmi-request-form">
                        <div class="bmi-form">
                            <p>
                                <label for="">Tuổi</label>
                                <input id="bmr-age" type="number" class="bmi-input" min="15" max="80"
                                       placeholder="từ 15 tới 80"/>
                            </p>
                            <p>
                                <label for="">Giới tính</label>
                                <label style="text-align: center; font-size: 25px">
                                    <input type="radio" name="bmr-gender" value="0"/>
                                    <span>Nam</span>
	                                <input type="radio" name="bmr-gender" value="1"/>
	                                <span>Nữ</span>
                                </label>
                            </p>
                            <p>
                                <label for="">Chiều cao (centimet)</label>
                                <input id="bmr-height" type="number" class="bmi-input"/>
                            </p>
                            <p>
                                <label for="">Cân nặng (kilogram)</label>
                                <input id="bmr-weight" type="number" class="bmi-input"/>
                            </p>
                            <p>
                                <button id="btn-bmr-submit" type="button"
                                        class="submit-btn">Tính toán</button>
                            </p>
                        </div>
                        <div class="bmi-notice">
                            <h4>BMR là gì?</h4>
                            <p>BMR (Basal Metabolic Rate) có nghĩa là chỉ số tiêu hao năng lượng cơ bản. Đây là chỉ số
                                calories để cơ thể cần để có thể hoạt động các nhu cầu sống cơ bản như tuần hoàn máu,
                                thở, ngủ, kiểm soát nhiệt độ cơ thể và hoạt động của não bộ.</p>
                            <p>Đối với hầu hết mọi người, tối đa ~ 70% tổng năng lượng (calo) được đốt cháy mỗi ngày là
                                do bảo trì. Hoạt động thể chất chiếm ~ 20% chi tiêu và ~ 10% được sử dụng cho việc tiêu
                                hóa thức ăn, còn được gọi là sinh nhiệt.</p>
                        </div>
                    </div>
                </div>
                <div id="bmr-result-form" class="bmr-result-form page-content clear" style="display: none">
                    <h4 style="text-align: center; text-transform: uppercase">Kết quả đo BMR</h4>
                    <div class="bmr-result">
                        <div style="text-align: center;font-weight: bold">Chỉ số BMR của bạn là
                            <span id="bmr-number" style="color: green"></span>
                            Calories/ngày
                        </div>
                        <h5 style="margin-top: 10px; margin-bottom: 10px;">Lượng Calorie bạn cần hấp thu hằng ngày dựa trên mức độ hoạt động</h5>
                        <table>
                            <thead>
                            <tr>
                                <th>Mức độ hoạt động</th>
                                <th>Calorie</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Ít vận động: ít hoặc không tập thể dục</td>
                                <td class="bmr_level_1"></td>
                            </tr>
                            <tr>
                                <td>Tập thể dục 1-3 lần / tuần</td>
                                <td class="bmr_level_2"></td>
                            </tr>
                            <tr>
                                <td>Tập thể dục 4-5 lần / tuần</td>
                                <td class="bmr_level_3"></td>
                            </tr>
                            <tr>
                                <td>Tập thể dục hàng ngày hoặc tập thể dục cường độ cao 3-4 lần / tuần</td>
                                <td class="bmr_level_4"></td>
                            </tr>
                            <tr>
                                <td>Tập thể dục cường độ cao 6-7 lần / tuần</td>
                                <td class="bmr_level_5"></td>
                            </tr>
                            <tr>
                                <td>Tập thể dục cường độ rất cao hàng ngày, hoặc công việc lao động</td>
                                <td class="bmr_level_6"></td>
                            </tr>
                            </tbody>
                        </table>
                        <ul style="margin-top: 20px;">
                            <li>Tập thể dục
                                : 15-30 phút hoạt động + nhịp tim tăng cao.</li>
                            <li>Tập thể dục cường độ cao
                                : 45-120 phút hoạt động + nhịp tim tăng cao.</li>
                            <li>Tập thể dục cường độ rất cao
                                : Hơn 2 giờ hoạt động + nhịp tim tăng cao.</li>
                        </ul>
                        <h5>Bạn cũng có thể quan tâm:</h5>
                        <ul>
                            <li><a href="<?php echo esc_url(get_permalink(2453)); ?>">8 lời khuyên ăn uống lành mạnh</a></li>
                            <li><a href="<?php echo esc_url(get_permalink(2481)); ?>">Tháp dinh dưỡng cho người Việt Nam</a></li>
                            <li><a href="<?php echo esc_url(get_permalink(2459)); ?>">Chỉ số sức khỏe cơ thể</a></li>
                            <li><a href="<?php echo esc_url(get_permalink(2468)); ?>">Kiểm tra cân nặng lý tưởng</a></li>
                        </ul>
	                    <button type="button" onclick="reset_form()">Kiểm tra lại</button>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(document).ready(() => {
                    jQuery('#btn-bmr-submit').click(() => {
                        let a = jQuery('#bmr-age').val();
                        let w = jQuery('#bmr-weight').val();
                        let h = jQuery('#bmr-height').val();
                        let g = jQuery('#bmr-gender').val();
                        if (a.length === 0 || w.length === 0 || h.length === 0) return;
                        let bmr = null;
                        if (g === '0')
                            bmr = 9.99 * parseFloat(w) + 6.25 * parseFloat(h) - 4.92 * parseFloat(a) + 5;
                        else
                            bmr = 9.99 * parseFloat(w) + 6.25 * parseFloat(h) - 4.92 * parseFloat(a) + -161;
                        jQuery('#bmr-number').text(bmr.toFixed(2));
                        jQuery('.bmr_level_1').text((bmr * 1.2).toFixed(0).toLocaleString());
                        jQuery('.bmr_level_2').text((bmr * 1.3).toFixed(0).toLocaleString());
                        jQuery('.bmr_level_3').text((bmr * 1.5).toFixed(0).toLocaleString());
                        jQuery('.bmr_level_4').text((bmr * 1.6).toFixed(0).toLocaleString());
                        jQuery('.bmr_level_5').text((bmr * 1.7).toFixed(0).toLocaleString());
                        jQuery('.bmr_level_6').text((bmr * 1.9).toFixed(0).toLocaleString());
                        jQuery('.bmr-result-form').css('display', 'block');
                        document.getElementById('bmr-result-form').scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
                    })
                })
	            function reset_form(){
                    jQuery('#bmr-age').val('');
                    jQuery('#bmr-weight').val('');
                    jQuery('#bmr-height').val('');
                    jQuery('#bmr-gender').val('');
                    jQuery('.bmr-result-form').css('display', 'none');
                    document.getElementById('bmr-request-form').scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
	            }
            </script>
        </main>
    </div>
<?php get_footer(); ?>