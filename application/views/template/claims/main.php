
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>

        <?= $this->load->view('template/claims/header') ?>

    </head>

    <body>



        <!-- Primary Page Layout
        ================================================== -->

       

        <div class="container">
            <div class="sixteen columns" id="top_heading">
                <h2 class="remove-bottom" >accident claims + advice</h2>

            </div>
            <div class="sixteen columns" id="big_menu">
                <div class="four columns"><div class="main_links"><h1><a href="" id="bigtitle1">Accident</a></h1><img src="<?= base_url() ?>images/icons/selector.png"/></div> </div>
                <div class="three columns"><div class="main_links"><h1 ><a href="" id="bigtitle2">Advice</a></h1><img src="<?= base_url() ?>images/icons/selector.png"/> </div></div>
                <div class="six columns"><div class="main_links"><h1><a href="" id="bigtitle3">Compensation</a></h1><img src="<?= base_url() ?>images/icons/selector.png"/> </div></div>
                <div class="three columns"><div class="main_links"> <h1><a href="" id="bigtitle4">Claim</a></h1><img src="<?= base_url() ?>images/icons/selector.png"/></div></div>
                
                   <div class="sixteen columns" id="accident_mega" style="display:none">
               <?=$this->load->view('global/claims/accident_menu')?>
            </div>
                 <div class="sixteen columns" id="advice_mega" style="display:none">
                advice menu
            </div>
                  <div class="sixteen columns" id="compensation_mega" style="display:none">
                compensation menu
            </div>
                  <div class="sixteen columns" id="claim_mega" style="display:none">
                claim menu
            </div>
            </div>
            
         
            

            <div class="sixteen columns"  id="big_heading">
                <div class="four columns" id="slideshow">
                    <h2>slideshow</h2>
                </div>
                <div class="twelve columns"  >
                    <h2>Welcome to our personal injury claim website. 
                        This is part of kenneth elliott + rowe solicitors</h2>
                    <p>
                        Everything you need to know about making a no win, no fee personal injury claim is here. Please click on one of the links above to find what you are looking for.
                    </p>
                </div>
            </div>


            <div class="four columns" id="greybox">
                <h3>Client Comments</h3>
                <div id="openquote"><img src="<?= base_url() ?>images/icons/open-quote.png"/></div>
                <div id="quote">They are nice</div>
                <div id="closequote"><img src="<?= base_url() ?>images/icons/close-quote.png"/></div>
            </div>
            <div class="twelve columns">
               

                <?= $this->load->view($main_content) ?> 
            </div>
            <div class="four columns" >
                &nbsp;
            </div>
            <div class="twelve columns" id="greybox">
                <div class="four columns">
                    <h2>What makes us better?</h2>
                </div>
                <p>
                    Some text here

                </p>
            </div>
            <div class="sixteen columns" id="footer_block">
                &nbsp;

            </div>

        </div><!-- container -->


        <?= $this->load->view('template/claims/footer') ?>

        <!-- End Document
        ================================================== -->
    </body>
</html>