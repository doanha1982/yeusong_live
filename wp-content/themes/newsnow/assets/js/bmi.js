jQuery(document).ready(()=>{
    jQuery('#btn-bmi-submit').click(()=>{
        let w = jQuery('#bmi-weight').val();
        let h = jQuery('#bmi-height').val();
        let txt_color='#fff';
        if (w.length === 0 || h.length === 0) return;
        w = parseFloat(w);
        h = parseFloat(h);
        h = (h / 100);
        let r = (w / (h*h)).toFixed(2);
        let txt = '';
        
        if (r < 18.5) {
            txt = 'Nhẹ cân';
            txt_color = '#2b95ff';
            jQuery('.bmi-score').css('left',r + '%');
        }
        else if (r <= 22.99) {
            txt = 'Khỏe mạnh';
            txt_color = '#00a12b';
            jQuery('.bmi-score').css('left', (1.8*r).toFixed(2) + '%');
        }
        else if (r <= 24.99) {
            txt = 'Thừa cân';
            txt_color = '#fc7f03';
            jQuery('.bmi-score').css('left', (2.06*r).toFixed(2) + '%');
        }
        else if (r <= 29.99) {
            txt = 'Béo phì độ I';
            txt_color = '#dc1900';
            jQuery('.bmi-score').css('left', (2.52*r).toFixed(2) + '%');
        }
        else
        {
            txt = 'Béo phì độ II';
            txt_color = '#dc1900';
            max = 40;
            if (r > 40) pos = 2.475*40;
            else pos = 2.475 * r;
            jQuery('.bmi-score').css('left', (pos).toFixed(2) + '%');
        }
        jQuery('.bmi-result-bar').text(txt).css('color', txt_color);
        if (r <= 40) jQuery('.bmi-score').text(r);
        else jQuery('.bmi-score').text('40+');
        jQuery('.bmi-response-form ,.bmi-score-bar').show();
        jQuery('.span-weight').text(w);
        jQuery('.span-height').text(jQuery('#bmi-height').val());
    })
})