<?php /* Template Name: Transparency Page */ get_header(); ?>
<!-- banner-section Start -->
<div class="inner-banner-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="banner-text text-center">
               <h1><?php the_title(); ?></h1>
               <p style="font-size:18px;">Track your donation, from the crypto-receipt to the bank-transfer the charity receives</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- banner-section End -->
<div class="inner-data-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <!-- 	 <?php  $myrowsnew = $wpdb->get_results( "SELECT * FROM wp_dev_cdn_token_info" ); var_dump($myrowsnew); ?> -->
            <div class="row">
               <div class="col-md-12">
                  <?php $date1=''; $myrows = $wpdb->get_results( "SELECT d.CharityID, d.CharityTitle, d.Benefactor, d.DateTime, d.TokenAmount, d.TokenID, d.TransactionHash, i.TransactionInfoUrl, d.FiatAmount, d.FiatType, d.FiatReceipt, d.USDAmount FROM
                     wp_dev_cdn_charity_donations AS d
                     INNER JOIN wp_dev_cdn_token_info i
                     ON i.ShortCode = d.TokenID
                     ORDER BY d.DateTime DESC" ); ?>
                  <div class="table-responsive">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th class="text-center">Charity</th>
                              <th class="text-center">Donor</th>
                              <th class="text-center">Date</th>
                              <th class="text-center">Amount</th>
                              <th class="text-center">Token</th>
                              <th class="text-center">Transaction</th>
                              <th class="text-center">Euro</th>
							         <th class="text-center">Bank Transfer</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($myrows as $myrow) {?>
                           <tr>
                              <?php  $month = date('F', strtotime($myrow->DateTime));$year=date('Y', strtotime($myrow->DateTime));  if($date1 != $month){echo '<td colspan="9" style="background: #ddd; font-weight: bold;">'.$month.' '.$year.' </td>';}?>
                              <!--     <?php $total_usd= floatval($myrow->USDAmount); if($date1 == $month){$total_usd = $total_usd + floatval($myrow->USDAmount); echo $total_usd;}  ?>    -->
                           </tr>
                           <tr>
                              <td class="text-center">
                                 <?php
                                    if($myrow->CharityID == 'x3CrypNa801'){$link='https://www.crypdonate.charity/donate-us/';}
                                    
                                    elseif($myrow->CharityID == '8fAllOne56a5'){$link='https://www.crypdonate.charity/donate-all/';}
                                    										 
                                    else{										 
                                    $args = array( 'post_type' => 'partner', 'posts_per_page' => -1 );    
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                    $val=get_field('charityid');
                                    if($val == $myrow->CharityID){$link=get_the_permalink();}
                                     endwhile; }  ?>
                                 <a href="<?php if(isset($link)){ echo $link;}else echo "javascript:"; ?>"><?php if(isset($myrow->CharityTitle))echo $myrow->CharityTitle ?></a>
                              </td>
                              <td class="text-center"><?php if(isset($myrow->Benefactor)){echo str_replace(["''", '""', "\\\\"], ["'", '"', "\\"], $myrow->Benefactor);} else{echo '(anonym)';} ?></td>
                              <td class="text-center"><?php if(isset($myrow->DateTime))echo (new DateTime($myrow->DateTime))->format('d M, H:i') ?></td>
                              <td class="text-right"><?php if(isset($myrow->TokenAmount))echo substr($myrow->TokenAmount, 0, strpos($myrow->TokenAmount, "."));echo '.';echo substr(substr($myrow->TokenAmount, strpos($myrow->TokenAmount, ".") + 1),0,6) ?></td>
                              <td class="text-center"><?php if(isset($myrow->TokenID)){echo "<img src='https://basics.crypdonate.charity/tokens/32/".$myrow->TokenID.".png' width='16px' height='16px'>"; echo $myrow->TokenID; } ?></td>
                              <td class="text-center">
                                 <?php if(isset($myrow->TransactionHash)){?>
                                 <div class="tooltip-new">
                                    <span class="tooltiptext"><?php echo $myrow->TransactionHash; ?></span>
                                    <div class="cut-text"><?php $url = str_replace("$1",$myrow->TransactionHash,$myrow->TransactionInfoUrl); ?><a href="<?php echo $url;?>" target="_blank"><?php echo substr($myrow->TransactionHash,0, 7).'.....'.substr($myrow->TransactionHash,-7); ?></a></div>
                                 </div>
                                 <?php } ?>
                              </td>
                              <td class="text-right">
							  <?php if(isset($myrow->FiatAmount)){echo substr($myrow->FiatAmount, 0, strpos($myrow->FiatAmount, "."));echo '.';echo substr(substr($myrow->FiatAmount, strpos($myrow->FiatAmount, ".") + 1),0,2);} else {echo 'received '.$myrow->TokenID;}  ?></td>
                              <td class="text-center"><?php if(isset($myrow->FiatReceipt)){?> <a href="https://archiv.crypdonate.charity/transparency/<?= $myrow->FiatReceipt ?>" target="_blank">Open Receipt<?php 
                           } else { ?><div class="tooltip-right">
                                    <span class="tooltiptext">Depending on the charity the<br/>Bank Transfer happens weekly or monthly.</span>
                                    <div class="cut-text">Pending</a></div>
                                 </div><?php } ?></td>
                           </tr>
                           <?php $date1=$month; unset($link); } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>

