<?php
global $moppm_dir;
$woocommerce_logo = $moppm_dir.'/includes/images/woocommerce.png';
$ultimate_member_logo = $moppm_dir.'/includes/images/ultimate_member.png';
$user_registration_logo = $moppm_dir.'/includes/images/user_registration.png';
$BuddyPress_logo = $moppm_dir.'/includes/images/BuddyPress.png';
$memberpress_logo = $moppm_dir.'/includes/images/memberpress.png';
$userpro_logo = $moppm_dir.'/includes/images/userpro.png'; 
$gravity_forms_logo = $moppm_dir.'/includes/images/gravity-forms.png';
$bbpress_logo = $moppm_dir.'/includes/images/bbpress.png';
$ninja_logo = $moppm_dir.'/includes/images/ninja.png';
$elementor_logo = $moppm_dir.'/includes/images/elementor.png'; 
?>
<div class="moppm_table_layout">
<h1><b>Custom Forms </b> </h1><br>
<span class="moppm_text">We support most of the login forms in our premium plugin present on WordPress. And our plugin is tested with almost all the forms like Woocommerce, Ultimate Member, Elementor Pro, and so on <?php echo '  <a href="'. esc_url_raw($upgrade_url) .'" style="color: red;">'; ?>[ UPGRADE ]</a></span><br><br>
<div class="moppm_form_row">
<div class="moppm_form_column" style="background-color:#f1f1ee;">
<table><tr><td><img style=" height:50px;display: inline;"src=" <?php echo esc_url_raw($woocommerce_logo);?>"></td>
    <td class="moppm_form_value" >    Woocommerce                        </td>
    <td style="align-items: right;"><label class="moppm_switch" style="
    margin-left: 153%;"><input type="checkbox" id="moppm_woocommerce"><span class="moppm_switch_slider moppm_switch_round"></span></label></td>

</tr>
</table>
<span class="moppm_premium_instruction" id="moppm_woo_error"></span>
</div>

<div class="moppm_form_column" style="background-color:#ebedf3;">
<table><tr><td><img style=" height:50px;display: inline;"src=" <?php echo esc_url_raw($ultimate_member_logo);?>"></td>
    <td class="moppm_form_value" >  Ultimate Member</td>
    <td style="align-items: right;"><label class="moppm_switch" style="
    margin-left: 133%;"><input type="checkbox" id="moppm_ultimate_member"><span class="moppm_switch_slider moppm_switch_round"></span></label></td></tr>
</table>
<span class="moppm_premium_instruction" id="moppm_ultimate_error"></span>
</div>
</div>
<div class="moppm_form_row">
<div class="moppm_form_column" style="background-color:#f1f1ee;">
<table><tr><td><img style=" height:50px;display: inline;"src=" <?php echo esc_url_raw($BuddyPress_logo);?>"></td>
    <td class="moppm_form_value" >  Buddy Press</td>
    <td style="align-items: right;"><label class="moppm_switch" style="
    margin-left: 197%;"><input type="checkbox" id="moppm_buddy"><span class="moppm_switch_slider moppm_switch_round"></span></label></td></tr>
</table>
<span class="moppm_premium_instruction" id="moppm_buddy_error"></span>
</div>
<div class="moppm_form_column" style="background-color:#ebedf3;">
<table><tr><td><img style=" height:50px;display: inline;"src=" <?php echo esc_url_raw($bbpress_logo);?>"></td>
    <td class="moppm_form_value" >  BB Press</td>
    <td style="align-items: right;"><label class="moppm_switch" style="
    margin-left: 55%;"><input type="checkbox" id="moppm_bbpress"><span class="moppm_switch_slider moppm_switch_round"></span></label></td></tr>
</table>
<span class="moppm_premium_instruction" id="moppm_bb_error"></span>
</div>
</div>
<div class="moppm_form_row">
<div class="moppm_form_column" style="background-color:#f1f1ee;">
<table><tr><td><img style=" height:50px;display: inline;"src=" <?php echo esc_url_raw($user_registration_logo);?>"></td>
    <td class="moppm_form_value" > User Registration</td>
    <td style="align-items: right;"><label class="moppm_switch" style="
    margin-left: 125%;"><input type="checkbox" id="moppm_user_registration"><span class="moppm_switch_slider moppm_switch_round"></span></label></td></tr>
</table>
<span class="moppm_premium_instruction" id="moppm_user_registration_error"></span>
</div>

<div class="moppm_form_column" style="background-color:#ebedf3;">
<table><tr><td><img style=" height:50px;display: inline;"src=" <?php echo esc_url_raw($memberpress_logo);?>"></td>
    <td class="moppm_form_value" > Member Press</td>
    <td style="align-items: right;"><label class="moppm_switch" style="
    margin-left: 110%;"><input type="checkbox" id="moppm_memberpress"><span class="moppm_switch_slider moppm_switch_round"></span></label></td></tr>
</table>
<span class="moppm_premium_instruction" id="moppm_member_error"></span>
</div>
</div>
<div class="moppm_form_row">
<div class="moppm_form_column" style="background-color:#f1f1ee;">
<table><tr><td><img style=" height:50px;display: inline;"src=" <?php echo esc_url_raw($userpro_logo);?>"></td>
    <td class="moppm_form_value" >User Pro</td>
    <td style="align-items: right;"><label class="moppm_switch" style="
    margin-left: 228%;"><input type="checkbox" id="moppm_userpro"><span class="moppm_switch_slider moppm_switch_round"></span></label></td></tr>
</table>
<span class="moppm_premium_instruction" id="moppm_user_error"></span>
</div>

<div class="moppm_form_column" style="background-color:#ebedf3;">
<table><tr><td><img style=" height:50px;display: inline;"src=" <?php echo esc_url_raw($gravity_forms_logo);?>"></td>
    <td class="moppm_form_value" >Gravity Form</td>
    <td style="align-items: right;"><label class="moppm_switch" style="
    margin-left: 197%;"><input type="checkbox" id="moppm_gravity"><span class="moppm_switch_slider moppm_switch_round"></span></label></td></tr>
</table>
<span class="moppm_premium_instruction" id="moppm_gravity_error"></span>
</div>
</div>
<div class="moppm_form_row">
<div class="moppm_form_column" style="background-color:#f1f1ee;">
<table><tr><td><img style=" height:50px;display: inline;"src=" <?php echo esc_url_raw($ninja_logo);?>"></td>
    <td class="moppm_form_value" > Ninja Form</td>
    <td style="align-items: right;"><label class="moppm_switch" style="
    margin-left: 176%;"><input type="checkbox" id="moppm_ninja"><span class="moppm_switch_slider moppm_switch_round"></span></label></td></tr>
</table>
<span class="moppm_premium_instruction" id="moppm_ninja_error"></span>
</div>

<div class="moppm_form_column" style="background-color:#ebedf3;">
<table><tr><td><img style=" height:50px;display: inline;"src=" <?php echo esc_url_raw($elementor_logo);?>"></td>
    <td class="moppm_form_value" >Elementer form</td>
    <td style="align-items: right;"><label class="moppm_switch" style="
    margin-left: 148%;"><input type="checkbox" id="moppm_elementor"><span class="moppm_switch_slider moppm_switch_round"></span></label></td></tr>
</table>
<span class="moppm_premium_instruction" id="moppm_ele_error"></span>
</div>
</div>
<div style="text-align: center">
        <p style="font-size:15px">If there is any other custom login form other than the above where password policy is not initiated for you, please reach out to us by dropping a query in the <b> <b><a href="mailto:2fasupport@xecurify.com" class = "moppm_button_clear moppm_mo_submitting_button1 "><i>Support</i></a></b> </p>
        </div>
</div>
<script>
   var elements = document.querySelectorAll(".moppm_form_column");
   jQuery("#moppm_woocommerce").click(function(e){
    
    document.getElementById("moppm_woo_error").innerHTML = "This feature is available in paid plugin";
     return ;
  }); 
   jQuery("#moppm_ultimate_member").click(function(e){
    
    document.getElementById("moppm_ultimate_error").innerHTML = "This feature is available in paid plugin";
     return ;
  }); 
   jQuery("#moppm_buddy").click(function(e){
    
    document.getElementById("moppm_buddy_error").innerHTML = "This feature is available in paid plugin";
     return ;
  }); 
   jQuery("#moppm_bbpress").click(function(e){
    
    document.getElementById("moppm_bb_error").innerHTML = "This feature is available in paid plugin";
     return ;
  }); 
   jQuery("#moppm_user_registration").click(function(e){
    
    document.getElementById("moppm_user_registration_error").innerHTML = "This feature is available in paid plugin";
     return ;
  }); 
   jQuery("#moppm_memberpress").click(function(e){
    
    document.getElementById("moppm_member_error").innerHTML = "This feature is available in paid plugin";
     return ;
  }); 
   jQuery("#moppm_userpro").click(function(e){
    
    document.getElementById("moppm_user_error").innerHTML = "This feature is available in paid plugin";
     return ;
  }); 
   jQuery("#moppm_gravity").click(function(e){
    
    document.getElementById("moppm_gravity_error").innerHTML = "This feature is available in paid plugin";
     return ;
  }); 
   jQuery("#moppm_ninja").click(function(e){
    
    document.getElementById("moppm_ninja_error").innerHTML = "This feature is available in paid plugin";
     return ;
  });
   jQuery("#moppm_elementor").click(function(e){   
  document.getElementById("moppm_ele_error").innerHTML = "This feature is available in paid plugin";
     return ;
  });
</script>
