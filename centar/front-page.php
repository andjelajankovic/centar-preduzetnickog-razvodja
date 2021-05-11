<?php get_header() ?>
  <header  class="mainHeader">
<h2 class="d-flex justify-content-end"><?php the_field('naslov_u_headeru'); ?></h2>
  </header>
  <section class="onama">
      <div class="container">
          <h3> <?php the_field('o_nama'); ?> </h3>
          <div class="underline"></div>
          <h6><b><?php the_field('first_text'); ?></b></h6>
          <p><?php the_field('small_text'); ?> </p>
          <h4><b><?php the_field('second_text'); ?></b> </h4>
          <ul>
              <li> <i class="fas fa-check-circle"></i> pokrenite vas posao </li>
              <li><i class="fas fa-check-circle"></i>postavite održivi poslovni model</li>
              <li><i class="fas fa-check-circle"></i>napišete poslovni plan</li>
              <li><i class="fas fa-check-circle"></i>sprovedete marketing strategiju</li>
              <li><i class="fas fa-check-circle"></i>realizujete vašu poslovnu ideju, preduzetnički eko sistem složena je simbioza mnoštva manjih delova- pojedinaca, preduzetnika, institucija, propisa, finansija, tržišta, kulture, obrazovanja itd...</li
                 </ul>
             <a href="" class="btn"><?php the_field('kontaktirajte_nas'); ?></a>
       
      </div>
  </section>
  <section class="usluge text-center">
      <div class="container">
         <h3><?php the_field('usluge'); ?></h3>
         <div class="underline"></div>
          <div class="row">
              <div class="col-md-6">
                  <i class="far fa-check-circle"></i> <br>
                  <p><?php the_field('usluge_jedan'); ?></p>
              </div>
              <div class="col-md-6">
               <i class="far fa-check-circle"></i> <br>
            <p><?php the_field('usluge_dva'); ?></p>
                </div>
                 </div>
           <div class="row">
              <div class="col-md-6">
                  <i class="far fa-check-circle"></i> <br>
                  <p><?php the_field('usluge_tri'); ?></p>
              </div>
              <div class="col-md-6">
               <i class="far fa-check-circle"></i> <br>
             <p><?php the_field('usluge_cetiri'); ?></p>
              </div>
          </div>
      </div>
  </section>
  <section class="mentorske-usluge">
      <div class="container">
          <h3><?php the_field('mentorske_usluge'); ?></h3>
          <div class="underline"></div>
          <p><?php the_field('mentorske_usluge_prvi'); ?> </p>
         <p><?php the_field('mentorske_usluge_drugi'); ?> </p>
              <a href="" class="btn"><?php the_field('kontaktirajte_nas'); ?></a>
      </div>
  </section>
   <section class="preporuke">
       <div class="container">
          <h3><?php the_field('preporuke'); ?></h3>
          <div class="underline"></div>
           <div class="row">
               <div class="col-md-6">
                  <img src="<?php the_field('slika_jeadn'); ?>" alt="" width="300" height="300"> 
                  <h4><?php the_field('ime'); ?></h4>
                  <h6> <b><?php the_field('kompanija'); ?></b></h6>
                  <p><?php the_field('utisak'); ?></p>
               </div>
                <div class="col-md-6">
                  <img src="<?php the_field('slika_dva');?>" alt=""  width="300" height="300"> 
                  <h4> Marko Vlajić </h4>
                  <h6> <b><?php the_field('kompanija_dva'); ?></b></h6>
                  <p><?php the_field('utisak_dva'); ?></p>
               </div>
           </div>
       </div>
   </section>
 <?php get_footer() ?>