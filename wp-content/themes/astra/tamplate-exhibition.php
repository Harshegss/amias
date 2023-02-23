<?php
session_start();
/* Template Name: Exhibition */
get_header();
// unset($_SESSION['memberVerrified']);
// echo get_option( 'vatTax', '' );
// echo wp_get_attachment_image_src(get_post_thumbnail_id(),'full')[0];

if(isset($_POST['member_calidation_check']) AND $_POST['member_calidation_check'] != ''){
    $form_id = 2226;
$form = Forminator_API::get_entries($form_id);
foreach($form as $key => $val){
    if($val->meta_data['hidden-1']['value'] == $_POST['member_calidation_check']){
        $_SESSION['memberVerrified'] = $val->meta_data['email-1']['value'];
    }
}
echo '<script>window.location="'.get_permalink( get_the_ID() ).'"</script>';
}
?>

<!-- <header class="header">
    <nav class="navbar navbar-expand-sm bg-light navbar-dark">
        <div class="container-fluid ">
         
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="about.php" role="button" data-bs-toggle="dropdown">Need help?</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item drop-content" > <h5>Need Help?</h5> 
                    <p>Do not hesitate to contact our hotline:</p>
                   <p> <a  href="#">+33 (0) 1 40 68 23 00</a></p>
                   <p><a href="##">Contact.ExposantsSIA@comexposium.com</a></p>
                </li>
                  
                </ul>
              </li>
              <li>
                <a href="##">FR </a> |
                <a href="##">EN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header> -->

<main id="main">
    <div class="conatiner">
        <div class="row">
            <div class="col-12">
                <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-12  p-0 ">
                <div class="card px-0 pt-4 pb-0 ">

                    <div id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <!--<li class="active" id="account"><strong>Account</strong></li>-->
                            <li id="step-1" class="active"><strong>1 Details</strong></li>
                            <li id="step-2" class="<?=isset($_SESSION['memberVerrified']) ? 'active' : '';?>"><strong>2 Desired stand</strong></li>
                            <li id="step-3"><strong>3 Additional Services</strong></li>
                            <li id="step-3" class="d-none"><strong>3.1 Additional Services</strong></li>
                            <li id="step-4"><strong> 4 Booking</strong></li>
                            <li id="step-4" class="d-none"><strong> 4.1 Booking</strong></li>
                            <li id="step-4" class="d-none"><strong> 4.2 Booking</strong></li>

                            <li id="step-5"><strong>5 Receipt acknowledgement</strong></li>
                            <!--<li id="confirm"><strong>Finish</strong></li>-->
                        </ul>
                        <div class="container">
                          <div class="row">
                           <div class="col-12 full-page">
    <fieldset <?=isset($_SESSION['memberVerrified']) ? 'style="position: relative; opacity: 0; display: none;"' : '';?> data-step="one">
                                

        <div class=" tab-1">
    <div>
        <span class="form-text-haed">Your details</span>

        <ul>
            <li> <span class="section-tab-1">Main business activity <sub class="text-danger">*</sub></span> </li>
            <li> <select class="form-select" aria-label="Default select example">
                    <option value="" selected>Select...</option>
                    <option value="Accessories for farming, hunting and fishing, fish-keeping">Accessories for farming, hunting and fishing, fish-keeping</option>
                    <option value="Agricultural services and professions">Agricultural services and professions</option>
                    <option value="lcoholic drinks (wines)">Alcoholic drinks (wines)</option>
                    <option value="Animal feed and care">Animal feed and care</option>
                    <option value="Bread, pastries, biscuits, jams, chocolate">Bread, pastries, biscuits, jams, chocolate</option>
                    <option value="Breeding sector">Breeding sector</option>
                    <option value="Butcher products, cured meat, delicatessen items">Butcher products, cured meat, delicatessen items</option>
                    <option value="Cheese and dairy products">Cheese and dairy products</option>
                    <option value="Crafts and heritage of rural life connection with agriculture (Except ind prod)">Crafts and heritage of rural life connection with agriculture (Except ind prod)</option>
                    <option value="Crops and plant sector">Crops and plant sector</option>
                    <option value="Environment and energy">Environment and energy</option>
                    <option value="Forest and wood">Forest and wood</option>
                    <option value="Fruit and vegetables">Fruit and vegetables</option>
                    <option value="Gardening and vegetable gardens">Gardening and vegetable gardens</option>
                    <option value="Grocery products">Grocery products</option>
                    <option value="ivestock-raising buildings and equipment">Livestock-raising buildings and equipment</option>
                    <option value="Multi-industry">Multi-industry</option>
                    <option value="Non-alcoholic and alcoholic drinks (excluding wines)">Non-alcoholic and alcoholic drinks (excluding wines)</option>
                    <option value="Official bodies at national/international level">Official bodies at national/international level</option>
                    <option value="Official bodies at regional/departmental level">Official bodies at regional/departmental level</option>
                    <option value="Pet animals">Pet animals</option>
                    <option value="Restaurant and bar">Restaurant and bar</option>
                    <option value="Sea and freshwater fishing and breeding">Sea and freshwater fishing and breeding</option>
                    <option value="Seafood products">Seafood products</option>
                </select></li>
        </ul>

        <ul class="py-3 radiobtn">
            <li><span class="section-tab-1">Are you a member?</span></li>
            <li class="d-flex">
                <div class="form-check me-3">
                    <input class="form-check-input dajd" value="yes" type="radio" name="sdsazczx">
                    <label class="form-check-label" for="flexRadioDefault">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input dajd" value="no" type="radio" name="sdsazczx" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        No
                    </label>
                </div>
            </li>
        </ul>


        <ul class="last-input">
            <li> <span class="section-tab-1">Your code: <sub class="text-danger">*</sub></span> </li>
            <li>
            <form action="" method="POST">
                <input type="text" name="member_calidation_check" class="form-control" required>
                <button type="submit" name="jfsdfklj" id="kdjs" class="d-none">submit</button>
                </form>
            </li>
        </ul>


    </div>

</div> <input type="button" name="next" id="fieldset_step_1" class="next action-button step-1" data-step="one" data-checkup="" value="Next" />


</fieldset>




<fieldset <?=isset($_SESSION['memberVerrified']) ? 'style="opacity: 1; position: relative; display: block;"' : '';?> data-step="two">
<div class=" tab-1 tab-2">

    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-12">
                <div class="right-side-step2">
                    <p>The costs simulation gives you the budget for your stand and space rental at the fair. It does not include additional technical services (available on your Exhibitor online area once registered).</p>
                    <P>Subject to availability, stands will be allocated according to the criteria outlined in the registration pack</P>
                    <P><strong>Reminder: </strong> In the case of acceptance of the participation request at the Show by the Organizer, the Organizer and the Exhibitor are definitely committed to each other.</P>
                    <ul class="tab-2-list">
                        <li> <span class="section-tab-1">Stand location area <sub class="text-danger">*</sub></span> </li>
                        <li> <select class="form-select" aria-label="Default select example">
                        <option value="" selected>Select...</option>
                    <option value="Accessories for farming, hunting and fishing, fish-keeping">Accessories for farming, hunting and fishing, fish-keeping</option>
                    <option value="Agricultural services and professions">Agricultural services and professions</option>
                    <option value="lcoholic drinks (wines)">Alcoholic drinks (wines)</option>
                    <option value="Animal feed and care">Animal feed and care</option>
                    <option value="Bread, pastries, biscuits, jams, chocolate">Bread, pastries, biscuits, jams, chocolate</option>
                    <option value="Breeding sector">Breeding sector</option>
                    <option value="Butcher products, cured meat, delicatessen items">Butcher products, cured meat, delicatessen items</option>
                    <option value="Cheese and dairy products">Cheese and dairy products</option>
                    <option value="Crafts and heritage of rural life connection with agriculture (Except ind prod)">Crafts and heritage of rural life connection with agriculture (Except ind prod)</option>
                    <option value="Crops and plant sector">Crops and plant sector</option>
                    <option value="Environment and energy">Environment and energy</option>
                    <option value="Forest and wood">Forest and wood</option>
                    <option value="Fruit and vegetables">Fruit and vegetables</option>
                    <option value="Gardening and vegetable gardens">Gardening and vegetable gardens</option>
                    <option value="Grocery products">Grocery products</option>
                    <option value="ivestock-raising buildings and equipment">Livestock-raising buildings and equipment</option>
                    <option value="Multi-industry">Multi-industry</option>
                    <option value="Non-alcoholic and alcoholic drinks (excluding wines)">Non-alcoholic and alcoholic drinks (excluding wines)</option>
                    <option value="Official bodies at national/international level">Official bodies at national/international level</option>
                    <option value="Official bodies at regional/departmental level">Official bodies at regional/departmental level</option>
                    <option value="Pet animals">Pet animals</option>
                    <option value="Restaurant and bar">Restaurant and bar</option>
                    <option value="Sea and freshwater fishing and breeding">Sea and freshwater fishing and breeding</option>
                    <option value="Seafood products">Seafood products</option>
                            </select></li>
                    </ul>

                    <div class="second-tab-list-step2 pt-4">
                        <span class="top-steo-2">Desired stand</span>

                        <?php
                        $customquery = array(
                            'post_type' =>  'exhibition-products',
                            'post_status' => 'publish',
                            'category_name' => 'desired-stand'
                        );
                        $exhibition = new WP_Query($customquery);
                        while ($exhibition->have_posts()) {
                            $exhibition->the_post();

                            $dataType = 'data-parent="desired-stand" data-vat_tax="'.get_post_meta(get_the_ID(), 'vat_tax', true).'" data-backet_id="'.get_the_ID().'" data-title="'.get_the_title().'" data-amount="'.get_post_meta(get_the_ID(), 'amount', true).'"  data-amount_type="'.get_post_meta(get_the_ID(), 'amount_type', true).'" data-choose_type="'.get_post_meta(get_the_ID(), 'choose_type', true).'"';
                        ?>
                            <div class="step2-child-box mt-2 forsingleiteskjs" data-amount="<?= get_post_meta(get_the_ID(), 'amount', true); ?>"  data-amount_type="<?= get_post_meta(get_the_ID(), 'amount_type', true) ?>" data-choose_type="<?= get_post_meta(get_the_ID(), 'choose_type', true) ?>">
                                <ul>
                                    <li class="product-box">
                                        <div class="product-img-box">
                                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="product-text-box">
                                            <h4><?= the_title() ?></h4>
                                            <p><?= has_excerpt() ? the_excerpt() : '' ?></p>
                                            <div class="Post_content d-none">
                                                <?= the_content() ?>
                                            </div>
                                            <p><span> More information</span></p>
                                        </div>
                                    </li>
                                    <li class="product-box-right text-end">
                                        <P>$<?= get_post_meta(get_the_ID(), 'amount', true); ?> <?= get_post_meta(get_the_ID(), 'vat_tax', true) != 0 ? 'Excl. VAT' : ''; ?> <?= get_post_meta(get_the_ID(), 'amount_type', true) == 'sq_m' ? ' / sq.m' : ''; ?></P>
                                        <?php
                                        if (get_post_meta(get_the_ID(), 'choose_type', true) == 'multiple') {
                                            echo '
                                            <p><span>Add to basket:</span></p>
                                            <div class="increment">
                                                <div class="counter-box">
                                                    <div class="minus count-box" >
                                                        <i class="fa-solid fa-minus"></i>
                                                    </div>
                                                    <div class="counter-number">
                                                        <input type="text" class="counum onlyoneSelector bcnxbcn_'.get_the_ID().'" value="0" style="width: 30px; padding: 0 5px; text-align: center;" '.$dataType.'/>
                                                        
                                                    </div>
                                                    <div class="plus count-box" >
                                                        <i class="fa-solid fa-plus"></i>
                                                    </div>
                                                </div>
                                            </div>';
                                        } else {
                                            echo '<p><span>
                                            <div class="form-check me-3 d-flex justify-content-end align-items-center">
                                                <label class="form-check-label" for="basket1">
                                                    Add to basket:
                                                </label>
                                                <input class="form-check-input counum_checkbox" value="1" type="checkbox" '.$dataType.'>
                                            </div>
                                        </span>
                                    </p>';
                                        }
                                        ?>

                                    </li>
                                </ul>
                            </div>
                        <?php }
                        ?>
                    </div>


                    <div class="second-tab-list-step2 mt-4 pt-4">
                        <span class="top-steo-2">Sides</span>

                        <?php
                        $customquery = array(
                            'post_type' =>  'exhibition-products',
                            'post_status' => 'publish',
                            'category_name' => 'sides'
                        );
                        $exhibition = new WP_Query($customquery);
                        while ($exhibition->have_posts()) {
                            $exhibition->the_post();
                            $dataType = 'data-vat_tax="'.get_post_meta(get_the_ID(), 'vat_tax', true).'" data-backet_id="'.get_the_ID().'" data-title="'.get_the_title().'" data-amount="'.get_post_meta(get_the_ID(), 'amount', true).'"  data-amount_type="'.get_post_meta(get_the_ID(), 'amount_type', true).'" data-choose_type="'.get_post_meta(get_the_ID(), 'choose_type', true).'"';
                        ?>
                            <div class="step2-child-box mt-2" data-amount="<?= get_post_meta(get_the_ID(), 'amount', true); ?>"  data-amount_type="<?= get_post_meta(get_the_ID(), 'amount_type', true) ?>" data-choose_type="<?= get_post_meta(get_the_ID(), 'choose_type', true) ?>">
                                <ul>
                                    <li class="product-box">
                                        <div class="product-img-box">
                                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="product-text-box">
                                            <h4><?= the_title() ?></h4>
                                            <p><?= has_excerpt() ? the_excerpt() : '' ?></p>
                                            <div class="Post_content d-none">
                                                <?= the_content() ?>
                                            </div>
                                            <p><span> More information</span></p>
                                        </div>
                                    </li>
                                    <li class="product-box-right text-end">
                                        <P>$<?= get_post_meta(get_the_ID(), 'amount', true); ?> <?= get_post_meta(get_the_ID(), 'vat_tax', true) != 0 ? 'Excl. VAT' : ''; ?> <?= get_post_meta(get_the_ID(), 'amount_type', true) == 'sq_m' ? ' / sq.m' : ''; ?></P>
                                        <?php
                                        if (get_post_meta(get_the_ID(), 'choose_type', true) == 'multiple') {
                                            echo '
                                            <p><span>Add to basket:</span></p>
                                            <div class="increment">
                                                <div class="counter-box">
                                                    <div class="minus count-box" >
                                                        <i class="fa-solid fa-minus"></i>
                                                    </div>
                                                    <div class="counter-number">
                                                        <input type="text" class="counum" value="0" style="width: 30px; padding: 0 5px; text-align: center;" '.$dataType.'/>
                                                    </div>

                                                    <div class="plus count-box" >
                                                        <i class="fa-solid fa-plus"></i>
                                                    </div>
                                                </div>
                                            </div>';
                                        } else {
                                            echo '<p><span>
                                            <div class="form-check me-3 d-flex justify-content-end align-items-center">
                                                <label class="form-check-label" for="basket1">
                                                    Add to basket:
                                                </label>
                                                <input class="form-check-input counum_checkbox" value="1" type="checkbox" '.$dataType.'>

                                            </div>
                                        </span>
                                    </p>';
                                        }
                                        ?>

                                    </li>
                                </ul>
                            </div>
                        <?php }
                        ?>

                    </div>


                    <div class="second-tab-list-step2 mt-4 pt-4">
                        <span class="top-steo-2">Options</span>

                        <?php
                        $customquery = array(
                            'post_type' =>  'exhibition-products',
                            'post_status' => 'publish',
                            'category_name' => 'options'
                        );
                        $exhibition = new WP_Query($customquery);
                        while ($exhibition->have_posts()) {
                            $exhibition->the_post();
                            $dataType = 'data-vat_tax="'.get_post_meta(get_the_ID(), 'vat_tax', true).'" data-backet_id="'.get_the_ID().'" data-title="'.get_the_title().'" data-amount="'.get_post_meta(get_the_ID(), 'amount', true).'"  data-amount_type="'.get_post_meta(get_the_ID(), 'amount_type', true).'" data-choose_type="'.get_post_meta(get_the_ID(), 'choose_type', true).'"';
                        ?>
                            <div class="step2-child-box mt-2" data-amount="<?= get_post_meta(get_the_ID(), 'amount', true); ?>"  data-amount_type="<?= get_post_meta(get_the_ID(), 'amount_type', true) ?>" data-choose_type="<?= get_post_meta(get_the_ID(), 'choose_type', true) ?>">
                                <ul>
                                    <li class="product-box">
                                        <div class="product-img-box">
                                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="product-text-box">
                                            <h4><?= the_title() ?></h4>
                                            <p><?= has_excerpt() ? the_excerpt() : '' ?></p>
                                            <div class="Post_content d-none">
                                                <?= the_content() ?>
                                            </div>
                                            <p><span> More information</span></p>
                                        </div>
                                    </li>
                                    <li class="product-box-right text-end">
                                        <P>$<?= get_post_meta(get_the_ID(), 'amount', true); ?> <?= get_post_meta(get_the_ID(), 'vat_tax', true) != 0 ? 'Excl. VAT' : ''; ?> <?= get_post_meta(get_the_ID(), 'amount_type', true) == 'sq_m' ? ' / sq.m' : ''; ?></P>
                                        <?php
                                        if (get_post_meta(get_the_ID(), 'choose_type', true) == 'multiple') {
                                            echo '
                                            <p><span>Add to basket:</span></p>
                                            <div class="increment">
                                                <div class="counter-box">
                                                    <div class="minus count-box" >
                                                        <i class="fa-solid fa-minus"></i>
                                                    </div>
                                                    <div class="counter-number">
                                                        <input type="text" class="counum" value="0" style="width: 30px; padding: 0 5px; text-align: center;" '.$dataType.'/>
                                                    </div>

                                                    <div class="plus count-box" >
                                                        <i class="fa-solid fa-plus"></i>
                                                    </div>
                                                </div>
                                            </div>';
                                        } else {
                                            echo '<p><span>
                                            <div class="form-check me-3 d-flex justify-content-end align-items-center">
                                                <label class="form-check-label" for="basket1">
                                                    Add to basket:
                                                </label>
                                                <input class="form-check-input counum_checkbox" value="1" type="checkbox" '.$dataType.'>

                                            </div>
                                        </span>
                                    </p>';
                                        }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        <?php }
                        ?>
                    </div>

                </div>
            </div>

        </div>
    </div>


</div>
<input type="button" name="next" data-step="two" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous step-2-pre" value="Previous" />
</fieldset>

<fieldset data-step="three">
<div class="tab-3 tab-3-form-page-1">
    <div class="container-fluid ">
        <div class="row tab-3-page-1">
            <div class="col-xl-12 col-lg-12 col-12 ">
                <div class="right-side-step2 pt-4">
                    <span class="top-steo-2">Additional Services</span>
                    <p>While registering online, the <strong>Exhibitor Pack</strong> and <strong>Insurance</strong> are mandatory items and will be added automatically to your basket. </p>
                    <P>The Exhibitor’s Pack includes registration and management of your application, a quota of “exhibitor” badges and communication tools to promote your participation.</P>
                    <P><strong>Reminder: </strong> In the case of acceptance of the participation request at the Show by the Organizer, the Organizer and the Exhibitor are definitely committed to each other.</P>
                    <div class="list-box-step-3">
                        <ul class="pb-4 ">
                            <li><span></span> For stands of 18 sq.m or smaller: $ 623 plus VAT</li>
                            <li><span></span> For stands larger than 18 sq.m: $ 755 plus VAT </li>
                        </ul>

                    </div>
                    <?php
                    $customquery = array(
                        'post_type' =>  'exhibition-products',
                        'post_status' => 'publish',
                        'category_name' => 'mandatory'
                    );
                    $exhibition = new WP_Query($customquery);
                    while ($exhibition->have_posts()) {
                        $exhibition->the_post();
                        $dataType = 'data-vat_tax="'.get_post_meta(get_the_ID(), 'vat_tax', true).'" data-backet_id="'.get_the_ID().'" data-title="'.get_the_title().'" data-amount="'.get_post_meta(get_the_ID(), 'amount', true).'"  data-amount_type="'.get_post_meta(get_the_ID(), 'amount_type', true).'" data-choose_type="'.get_post_meta(get_the_ID(), 'choose_type', true).'"';
                    ?>
                        <div class="step2-child-box mt-2 mb-5 mandatory" data-amount="<?= get_post_meta(get_the_ID(), 'amount', true); ?>"  data-amount_type="<?= get_post_meta(get_the_ID(), 'amount_type', true) ?>" data-choose_type="<?= get_post_meta(get_the_ID(), 'choose_type', true) ?>">
                            <ul>
                                <li class="product-box">
                                    <div class="product-img-box">
                                        <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] ?>" alt="" class="img-fluid">
                                    </div>
                                    <div class="product-text-box">
                                        <h4><?= the_title() ?></h4>
                                        <p><?= has_excerpt() ? the_excerpt() : '' ?></p>
                                        <div class="Post_content d-none">
                                            <?= the_content() ?>
                                        </div>
                                        <p><span> More information</span></p>
                                    </div>
                                </li>
                                <li class="product-box-right text-end">
                                    <P>$<?= get_post_meta(get_the_ID(), 'amount', true); ?> <?= get_post_meta(get_the_ID(), 'vat_tax', true) != 0 ? 'Excl. VAT' : ''; ?> <?= get_post_meta(get_the_ID(), 'amount_type', true) == 'sq_m' ? ' / sq.m' : ''; ?></P>
                                    <?php
                                            echo '<p class=""><span>
                                            <div class="d-none form-check me-3 d-flex justify-content-end align-items-center">
                                                <label class="form-check-label" for="basket1">
                                                    Add to basket:
                                                </label>
                                                <input class="form-check-input counum_checkbox" value="1" type="checkbox" '.$dataType.'>
                                            </div>
                                        </span>
                                    </p>';
                                    ?>
                                </li>
                            </ul>
                        </div>
                    <?php }
                    ?>

                    <div class="second-tab-list-step2 pt-4 ">
                        <span class="top-steo-2">Partners</span>
                        <div class="step-3-top-box">
                            <p><strong>Planning to come with partner companies?</strong></p>
                            <P>Buy now the <a class="text-decuration">registration fees for your co-exhibitors.</a></P>
                            <p>If you are a Pavilion Organizer, you can directly buy your Pavilion exhibitors' fees on your Exhibitor Area once registered.</p>
                            <P>Details regarding your partners will be requested later (address, activity, etc…)</P>


                        </div>
                        <?php
                        $customquery = array(
                            'post_type' =>  'exhibition-products',
                            'post_status' => 'publish',
                            'category_name' => 'partners'
                        );
                        $exhibition = new WP_Query($customquery);
                        while ($exhibition->have_posts()) {
                            $exhibition->the_post();
                            $dataType = 'data-vat_tax="'.get_post_meta(get_the_ID(), 'vat_tax', true).'" data-backet_id="'.get_the_ID().'" data-title="'.get_the_title().'" data-amount="'.get_post_meta(get_the_ID(), 'amount', true).'"  data-amount_type="'.get_post_meta(get_the_ID(), 'amount_type', true).'" data-choose_type="'.get_post_meta(get_the_ID(), 'choose_type', true).'"';
                        ?>
                            <div class="step2-child-box mt-2" data-amount="<?= get_post_meta(get_the_ID(), 'amount', true); ?>"  data-amount_type="<?= get_post_meta(get_the_ID(), 'amount_type', true) ?>" data-choose_type="<?= get_post_meta(get_the_ID(), 'choose_type', true) ?>">
                                <ul>
                                    <li class="product-box">
                                        <div class="product-img-box">
                                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="product-text-box">
                                            <h4><?= the_title() ?></h4>
                                            <p><?= has_excerpt() ? the_excerpt() : '' ?></p>
                                            <div class="Post_content d-none">
                                                <?= the_content() ?>
                                            </div>
                                            <p><span> More information</span></p>
                                        </div>
                                    </li>
                                    <li class="product-box-right text-end">
                                        <P>$<?= get_post_meta(get_the_ID(), 'amount', true); ?> <?= get_post_meta(get_the_ID(), 'vat_tax', true) != 0 ? 'Excl. VAT' : ''; ?> <?= get_post_meta(get_the_ID(), 'amount_type', true) == 'sq_m' ? ' / sq.m' : ''; ?></P>
                                        <?php
                                        if (get_post_meta(get_the_ID(), 'choose_type', true) == 'multiple') {
                                            echo '
                                            <p><span>Add to basket:</span></p>
                                            <div class="increment">
                                                <div class="counter-box">
                                                    <div class="minus count-box" >
                                                        <i class="fa-solid fa-minus"></i>
                                                    </div>
                                                    <div class="counter-number">
                                                        <input type="text" class="counum" value="0" style="width: 30px; padding: 0 5px; text-align: center;" '.$dataType.'/>
                                                    </div>

                                                    <div class="plus count-box" >
                                                        <i class="fa-solid fa-plus"></i>
                                                    </div>
                                                </div>
                                            </div>';
                                        } else {
                                            echo '<p><span>
                                            <div class="form-check me-3 d-flex justify-content-end align-items-center">
                                                <label class="form-check-label" for="basket1">
                                                    Add to basket:
                                                </label>
                                                <input class="form-check-input counum_checkbox" value="1" type="checkbox" '.$dataType.'>

                                            </div>
                                        </span>
                                    </p>';
                                        }
                                        ?>

                                    </li>
                                </ul>
                            </div>
                        <?php }
                        ?>
                    </div>


                    <div class="second-tab-list-step2 mt-4 pt-4">
                        <span class="top-steo-2">Communication & Promotion</span>
                        <div class="step-3-top-box">
                            <p><strong>Planning to come with partner companies?</strong></p>
                            <P>Buy now the <a class="text-decuration">registration fees for your co-exhibitors.</a></P>
                            <p>If you are a Pavilion Organizer, you can directly buy your Pavilion exhibitors' fees on your Exhibitor Area once registered.</p>
                            <P>Details regarding your partners will be requested later (address, activity, etc…)</P>
                        </div>
                        <?php
                        $customquery = array(
                            'post_type' =>  'exhibition-products',
                            'post_status' => 'publish',
                            'category_name' => 'communication-promotion'
                        );
                        $exhibition = new WP_Query($customquery);
                        while ($exhibition->have_posts()) {
                            $exhibition->the_post();
                            $dataType = 'data-vat_tax="'.get_post_meta(get_the_ID(), 'vat_tax', true).'" data-backet_id="'.get_the_ID().'" data-title="'.get_the_title().'" data-amount="'.get_post_meta(get_the_ID(), 'amount', true).'"  data-amount_type="'.get_post_meta(get_the_ID(), 'amount_type', true).'" data-choose_type="'.get_post_meta(get_the_ID(), 'choose_type', true).'"';
                        ?>
                            <div class="step2-child-box mt-2" data-amount="<?= get_post_meta(get_the_ID(), 'amount', true); ?>"  data-amount_type="<?= get_post_meta(get_the_ID(), 'amount_type', true) ?>" data-choose_type="<?= get_post_meta(get_the_ID(), 'choose_type', true) ?>">
                                <ul>
                                    <li class="product-box">
                                        <div class="product-img-box">
                                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="product-text-box">
                                            <h4><?= the_title() ?></h4>
                                            <p><?= has_excerpt() ? the_excerpt() : '' ?></p>
                                            <div class="Post_content d-none">
                                                <?= the_content() ?>
                                            </div>
                                            <p><span> More information</span></p>
                                        </div>
                                    </li>
                                    <li class="product-box-right text-end">
                                        <P>$<?= get_post_meta(get_the_ID(), 'amount', true); ?> <?= get_post_meta(get_the_ID(), 'vat_tax', true) != 0 ? 'Excl. VAT' : ''; ?> <?= get_post_meta(get_the_ID(), 'amount_type', true) == 'sq_m' ? ' / sq.m' : ''; ?></P>
                                        <?php
                                        if (get_post_meta(get_the_ID(), 'choose_type', true) == 'multiple') {
                                            echo '
                                            <p><span>Add to basket:</span></p>
                                            <div class="increment">
                                                <div class="counter-box">
                                                    <div class="minus count-box" >
                                                        <i class="fa-solid fa-minus"></i>
                                                    </div>
                                                    <div class="counter-number">
                                                        <input type="text" class="counum" value="0" style="width: 30px; padding: 0 5px; text-align: center;" '.$dataType.'/>
                                                    </div>

                                                    <div class="plus count-box" >
                                                        <i class="fa-solid fa-plus"></i>
                                                    </div>
                                                </div>
                                            </div>';
                                        } else {
                                            echo '<p><span>
                                            <div class="form-check me-3 d-flex justify-content-end align-items-center">
                                                <label class="form-check-label" for="basket1">
                                                    Add to basket:
                                                </label>
                                                <input class="form-check-input counum_checkbox" value="1" type="checkbox" '.$dataType.'>

                                            </div>
                                        </span>
                                    </p>';
                                        }
                                        ?>

                                    </li>
                                </ul>
                            </div>
                        <?php }
                        ?>
                    </div>




                </div>

            </div>

           


        </div>
    </div>
</div>

<input type="button" name="next" data-step="three" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>

<fieldset data-step="four">
<div class=" tab-3 tab-3-form-page-1">
    <div class="container-fluid ">
        <div class="row tab-3-page-2">
            <div class="col-xl-12 col-lg-12 col-12">


                <div class="form-group py-2">
                    <!-- <P style="font-size: 19px;">You can receive your quotation by e-mail and/or make a reservation request.
                        Email of the recipient <sup class="text-danger">*</sup></P>
                    <div class="form-group my-4 ">
                        <input class="form-control" value="" type="email" name="emailvali" id="email">

                    </div>

                    <p>You would like to: <sup class="text-danger">*</sup></p>

                    <div class="form-check me-3 ">
                        <input class="form-check-input" value="yes" type="checkbox" name="basket2" id="Receive">
                        <label class="form-check-label" for="Receive">
                            Receive this simulation by mail
                        </label>


                    </div>

                    <div class="form-check me-3 ">
                        <input class="form-check-input" value="yes" type="checkbox" name="basket2" id="Make">
                        <label class="form-check-label" for="Make">
                            Make a reservation request from this simulation
                        </label>

                    </div> -->
                    <?=do_shortcode('[forminator_form id="2235"]')?>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="button" name="next" data-step="four" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>

<fieldset data-step="five">
<div class=" tab-4">

    <div class="container-fluid ">
        <!----------------Reservation 1 / 3 : summary -->
        <div class="row reservation-1">
            <div class="col-xl-12 col-lg-12 col-12">

                <h3 class="blue">Reservation 1 / 3 : your company and your contacts</h3>
                <p class="blue pt-3">Company address</p>
                <?=do_shortcode('[forminator_form id="2234"]')?>

            </div>


        </div>


    </div>
</div>
<input type="button" name="next" data-step="five" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>

<fieldset data-step="six">
<div class=" tab-4">

    <div class="container-fluid ">
        <!----------------Reservation 2 / 3 : summary -->
        <div class="row booking-inner-step2">
            <div class="col-12">
                <div class="booking-step2 px-5">
                    <h2 class="blue py-3">Reservation 2 / 3: payment terms and signatory</h2>
                    <h3 class="blue py-3">Payment terms</h3>

                    <P>So that your reservation request is confirmed, you must <span class="text-danger">validate this step.</span></P>

                    <ul>
                        <li>Bank cheque payable to <strong>COMEXPOSIUM - SIA 2023</strong> <br>
                            <strong>70 avenue du Général de Gaulle - 92058 Paris la Défense cedex - France</strong> <br><br>
                            <span class="text-decuration"><strong>Important :</strong> Please note that only cheques domiciled in France are accepted.</span>
                        </li>

                        <li>Bank cheque payable to <strong>COMEXPOSIUM - SIA 2023</strong> <br>
                            <strong>70 avenue du Général de Gaulle - 92058 Paris la Défense cedex - France</strong><br><br>
                            <span class="text-decuration ps-4"><strong>Important :</strong> The proof of payment must be attached. We remind you that the bank fees are payable by the applicant. Please make sure that your company name appears in full on all bank transfer information in order to avoid any difficulties in identifying your payment. On the transfer order, you must tick the box "OUR" (at our charge).</span>
                        </li>
                    </ul>


                    <div class="table-box-1 mt-5 mb-3 w-75 w-md-100">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Bank code</th>
                                    <th>Sorting code</th>
                                    <th>Account n°</th>
                                    <th> RIB Key</th>
                                    <th>Domiciliation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>30004</td>
                                    <td>00813</td>
                                    <td> 00010646342</td>
                                    <td>51</td>
                                    <td> BNP PARIBAS Paris Etoile Entreprises</td>
                                </tr>

                            </tbody>
                        </table>

                        <P class="pt-4 small-font">IBAN : <strong>FR76 3000 4008 1300 0106 4634 251</strong> BIC/SWIFT <strong>: BNPAFRPPPGA</strong></P>
                        <P>By default, the invoicing address is the one of your company.</P>
                        <p>If you wish to charge another company, you have to declare it.</p>



                    </div>

                    <div class="py-4">
                        <h4 class="py-3 text-danger">CAUTION: ATTEMPTS OF FRAUD</h4>
                        <p class="py-3 text-danger">- Third parties may usurp COMEXPOSIUM and send you, by all means, false invoices relating to the show in order to obtain a payment from you.</p>

                        <h4 class="py-3 text-danger">HOW TO AVOID THIS SITUATION</h4>

                        <p class="p-0 m-0 mt-2 text-danger">- Before making any transfer, check that the bank details on your invoice correspond to those on your application form.</p>
                        <p class="p-0 m-0  mt-2 text-danger">- Please note the only postal address intended to receive checks: COMEXPOSIUM 70 avenue General de Gaulle - 92058 Paris la Defense cedex.</p>
                        <p class="p-0 m-0   mt-2 text-danger">- In case of doubt and before any payment, contact your sales representative.</p>
                    </div>
                    <div class="payment-method text-align-center pt-2">
                        <div class="container-fluid ">


                            <div class="row">
                                <div class="col-12">
                                    <div class="mt-2 second-form-step5 border-0">
                                        <!-- <span class="top-steo-2">Mailing address for invitation cards</span> -->


                                        <div class="ps-5 ms-5">
                                            <div class="mb-3 row pb-4">
                                                <label for="name" class="col-sm-3 col-form-label" style="font-size: 18px;">Payment method <sub class="text-danger">*</sub></label>
                                                <div class="col-sm-9">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-check me-3">
                                                                <input class="form-check-input" value="yes" type="radio" name="Payment" id="Credit/debit">
                                                                <label class="form-check-label" for="Credit/debit">
                                                                    Credit/debit card
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-check me-3">
                                                                <input class="form-check-input" value="yes" type="radio" name="Payment" id="Cheque">
                                                                <label class="form-check-label" for="Cheque">
                                                                    Cheque
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-check me-3">
                                                                <input class="form-check-input" value="yes" type="radio" name="Payment" id="debit">
                                                                <label class="form-check-label" for="debit">
                                                                    Credit/debit card
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h3 class="blue pb-4">Signatory</h3>
                                            <div class="mb-3 row ">
                                                <label for="name" class="col-sm-3 col-form-label">Corporate name<sup class="text-danger">*</sup></label>
                                                <div class="col-sm-9">
                                                    <select>
                                                        <option value="">Select...</option>
                                                        <option value="21" selected="">Mrs</option>
                                                        <option value="22">Mr</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">First name<sup class="text-danger">*</sup></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="First-name">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">Last name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="Last-name">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">Position</label>

                                                <div class="col-sm-9">
                                                    <select>
                                                        <option value="">Select...</option>
                                                        <option value="242" selected="">Administrator</option>
                                                        <option value="86">Ambassador</option>
                                                        <option value="141">Assistant</option>
                                                        <option value="33">Branch / Managing Director</option>
                                                        <option value="1403">Breeder</option>
                                                        <option value="30">CEO / Managing Director / General Manager</option>
                                                        <option value="2430">Chairman of the board</option>
                                                        <option value="26">Communication Director or Manager</option>
                                                        <option value="61">Consultant</option>
                                                        <option value="2427">Employee / Worker</option>
                                                        <option value="35">Export Director</option>
                                                        <option value="41">Finance / Administration Director or Manager</option>
                                                        <option value="40">General Secretary</option>
                                                        <option value="38">IT Director</option>
                                                        <option value="2168">Journalist / Publisher</option>
                                                        <option value="152">Logistics Director or Manager</option>
                                                        <option value="34">Managing Director / Regional</option>
                                                        <option value="25">Marketing Director or Manager</option>
                                                        <option value="151">Operations Director or Manager</option>
                                                        <option value="202">Other (please specify)</option>
                                                        <option value="2424">Project Manager / Product Manager</option>
                                                        <option value="52">Purchase Director or Manager</option>
                                                        <option value="24">Sales Director or Manager</option>
                                                        <option value="67">Sales Representative</option>
                                                        <option value="48">Sales-Technician Engineer</option>
                                                        <option value="36">Technical Director / Production Director</option>
                                                        <option value="554">Technician / Supervisor</option>
                                                        <option value="2428">Trainer / Consultant</option>
                                                    </select>

                                                </div>
                                            </div>


                                        </div>



                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <p class="small-font"><em>Your personal data are processed by the company COMEXPOSIUM – 70 avenue du Général de Gaulle, 92058 PARIS LA DEFENSE CEDEX - FRANCE in order to in order to manage your registration and your participation in Paris International Agricultural Show 2023 in execution of the General Terms and Conditions of Participation and to be able to send you, by any communications channel, in consideration of your consent and depending on your preferences news and business proposals related to the Show and/or to the other events organised by COMEXPOSIUM Group companies and/or our partners’ business proposals.</em></p>

                                    <p class="small-font"><em>Personal data it is compulsory to provide are indicated as such in the form. Without these data, our Company will be unable to meet your request.</em></p>


                                    <p class="small-font"><em>The only parties with access to your personal data, within the limit of their respective remits, are: (i) our company's internal departments in charge of managing the Show, (ii) the service providers that the company has authorized in connection with the organization and management of the Show and, depending on your preferences, (iii) COMEXPOSIUM Group and (iv) our partners.
                                        </em></p>


                                    <p class="small-font"><em>You have the right to access and the right to correct data concerning you, and the right to delete, the right to oppose the processing of these data, the right to limit processing and the right to the portability of your data, which you can exercise at any time by writing, by electronic mail or post, to this address: COMEXPOSIUM – Paris International Agricultural Show at 70 avenue du Général de Gaulle, 92058 PARIS LA DEFENSE CEDEX - FRANCE or <a href="##">privacy@comexposium.com.</a> You also have the right to make a claim to the CNIL (French data protection agency).</em></p>


                                    <p class="small-font"><em>You may receive news and business proposals about the Paris International Agricultural Show </em></p>

                                    <div class="form-check me-3 py-4">

                                        <label class="form-check-label pe-3" for="If-you">
                                            If you do not wish to receive these, please check this box. &nbsp; &nbsp;
                                        </label>
                                        <input class="form-check-input" value="yes" type="checkbox" name="basket2" id="If-you" style=" float: inherit;">

                                    </div>
                                    <div class="bootom-step-4 border p-4">
                                        <div class="form-check me-3 ">
                                            <input class="form-check-input" value="yes" type="checkbox" name="basket2" id="bo-1">
                                            <label class="form-check-label" for="bo-1">
                                                Please send me news and business proposals about the Comexposium Group’s other events: Paris Retail Week, Foire de Paris, Salon du Tourisme, Retromobile, Paris Games Week, etc.
                                            </label>
                                        </div>
                                        <div class="form-check me-3 ">
                                            <input class="form-check-input" value="yes" type="checkbox" name="basket2" id="bo-2">
                                            <label class="form-check-label" for="bo-2">
                                                Please send me news and business proposals about the partners of Paris International Agricultural Show.
                                            </label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div  style="overflow:auto; " class="mt-4 previ Reservation-2 lastbtn">
                      
                </div>
            </div>
        </div>
    </div>
</div>
<input type="button" name="next" data-step="six" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>

<fieldset data-step="seven">
<div class=" tab-4">

    <div class="container-fluid ">
        <!----------------Reservation 3 / 3 : summary -->
        <div class="row booking-inner-step3">
            <div class="col-12">
                <div class="reservation-3 ps-5">
                    <h3 class="blue py-5">Reservation 3 / 3 : summary </h3>

                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li class="square">
                                    <h5 class="blue">General information</h5>
                                    <ul>
                                        <li class="py-3 ps-2">Main business activity: </li>
                                        <li class="square ms-5">Alcoholic drinks (wines)</li>


                                    </ul>

                                    <ul>
                                        <li class="py-3 ps-3">Are you a member? No </li>
                                        <li class=" ">
                                            <p class="blue sf-1 ">Alcoholic drinks (wines)</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul>
                                <li class="square">
                                    <h5 class="blue">Stand</h5>

                                    <ul>
                                        <li class="py-3 ps-3">Sector: Environment and Energy </li>
                                        <li class=" ">
                                            <p class="blue sf-1 ">Modify desired stand </p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul>
                                <li class="square">
                                    <h5 class="blue">Your company</h5>

                                    <ul>
                                        <li class="mt-1">dd dd</li>
                                        <li class="mt-1">dd ddss</li>
                                        <li class="mt-1">BARBADOS</li>
                                        <li class="mt-1">Phone number: <span>123456</span></li>
                                        <li class="mt-1">Fax number: <span>1212121</span></li>
                                        <li class="mt-1">Language: <span>French</span> </li>
                                        <li class="mt-1">Website: <span></span></li>
                                        <li class="mt-1">Email: <span></span></li>
                                        <li class="mt-1">Legal status: <span>Association not subject to VAT</span></li>
                                        <li class="mt-1">Name of your company as it should appear: <span>dddd</span> </li>
                                        <li class="mt-1">Intracommunity VAT number: <span></span></li>
                                        <li class="mt-1">Certificate of incorporation: <span></span> </li>
                                        <li class=" mt-1">
                                            <p class="blue sf-1 ">Modify general information</p>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>


                        <div class="col-md-6">
                            <ul>
                                <li class="square">
                                    <h5 class="blue">Person in charge of your stand</h5>

                                    <ul>
                                        <li class="mt-1"> Mrs <span>ddd dd </span></li>
                                        <li class="mt-1">Position: <span>Marketing Director or Manager</span></li>
                                        <li class="mt-1">Phone number: <span>123456</span></li>
                                        <li class="mt-1">Mobile phone: <span> 1212121</span></li>

                                        <li class="mt-1">Email: <span>vapaga6150@crtsec.com</span></li>
                                        <li class="mt-1">Language: <span>French</span> </li>


                                    </ul>


                                </li>
                            </ul>

                            <ul>
                                <li class="">
                                    <p class="blue">Person in charge of your stand</p>
                                    <ul>
                                        <li class="mt-1"> <span>ddd dd </span></li>
                                        <li class="mt-1"> <span>ddd dd </span></li>
                                        <li class="mt-1"> <span>dd dd </span></li>
                                        <li class="mt-1"> <span>BARBADOS </span></li>
                                    </ul>


                                </li>
                            </ul>

                            <ul>
                                <li class="square">
                                    <h5 class="blue">Decision-maker</h5>
                                    <ul>
                                        <li class="mt-1">Mrs <span>ddd dd </span></li>
                                        <li class="mt-1">Operations Director or Manager <span></span></li>
                                        <li class=" ">
                                            <p class="blue sf-1 text-danger">Modify desired stand </p>
                                        </li>

                                    </ul>


                                </li>
                            </ul>

                            <ul>
                                <li class="square">
                                    <h5 class="blue">Signatory</h5>
                                    <ul>
                                        <li class="mt-1">Mrs <span>ddd dd </span></li>
                                        <li class="mt-1">Ambassador <span></span></li>
                                        <li class=" ">
                                            <p class="blue sf-1 ">Modify signatory information </p>
                                        </li>

                                    </ul>


                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 pt-5">
                            <h4 class="py-4">Your order</h4>
                            <P class="fs">1st instalment: 30% upon confirmation of your registration (see the GENERAL TERMS AND CONDITIONS OF PARTICIPATION).</P>
                            <P class="fs">2nd instalment: 30% due on 30 September 2022</P>
                            <P class="fs">The balance: The balance invoice will be payable 15 days after its date of issue. </P>
                            <P class="fs">Any registration made less than thirty (30) days before the Exhibition must be accompanied by payment of the full amount due by the exhibitor </P>

                            <h4 class="py-4">Amount of your 1st instalment incl. VAT (30%): $2,822.04</h4>

                            <div class="table-environment">
                                <h5>Environment and Energy - - 18 sq.m</h5>
                                <table class="table table-bordered table-responsive">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>Product</th>
                                            <th>Reference</th>
                                            <th>Quantity</th>
                                            <th>Unit Price excl. VAT</th>
                                            <th>Total excl. VAT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Basic Stand (from 11/25/2022 onwards)</td>
                                            <td>STDEQ_003</td>
                                            <td>18 sq.m </td>
                                            <td>$293.50 </td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>1 open side (without corner) - if available</td>
                                            <td>FACE OOO</td>
                                            <td>1</td>
                                            <td>$293.50 </td>
                                            <td>$293.50 </td>
                                        </tr>
                                        <tr>
                                            <td>Exhibitor Pack (mandatory) stand <= 18m2</td>
                                            <td>DIP 001</td>
                                            <td>1</td>
                                            <td>$293.50 </td>
                                            <td>$293.50 </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="text-end">
                                    <ul>
                                        <li>Amount excl. taxes: $7,861.00 </li>
                                        <li>Amount taxes: $1,545.80 </li>
                                        <li>Amount incl. taxes: $9,406.80</li>
                                        <hr>
                                        <li>Amount excl. taxes: $7,861.00 </li>
                                        <li>Amount taxes: $1,545.80 </li>
                                        <li>Amount incl. taxes: $9,406.80</li>
                                        <li>
                                            <h5>First instalment incl. VAT (30%): $2,822.04
                                            </h5>
                                        </li>
                                    </ul>
                                </div>


                            </div>

                            <div class="para-bottom-Reservation-3 pt-4">
                                <p class="fs">You can update the amount of VAT depending on your legal status, Intracommunity VAT number, Country or Certificate of Incorporation that you uploaded in the 1st step of your reservation: <span class="sf-1">click here to return to the 1st step of your reservation.</span> </p>

                                <div class="mb-3 row ">
                                    <label for="name" class="col-sm-4 col-form-label">Reference that you wish to appear on your invoice </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="AGREEMENt ">
                                    <h4 class="blue py-3">YOUR AGREEMENT </h4>
                                    <P class="fs">I confirm I have read and possess a copy of the <span class="sf-1">General Terms and Conditions of Participation; General Terms and Conditions of Sale for Communication Tools;</span> the <span class="sf-1"> General Rules for Commercial Events</span> and the <span class="sf-1">Specific Rules for the Show</span> and I accept all the clauses without restriction or reservation.</P>
                                    <P class="fs pt-2">I will also read through all the information about the details of my participation in the Show, available in the “Practical Information” section of the Exhibitors’ Space which can be accessed from the Show’s website, and will comply with all its provisions.</P>

                                    <P class="fs pt-2">I will also read through all the information about the details of my participation in the Show, available in the “Practical Information” section of the Exhibitors’ Space which can be accessed from the Show’s website, and will comply with all its provisions.</P>

                                    <P class="fs pt-2">If I want to cancel and/or request a refund of the amount invoiced by the Organiser for the tenant risk / property damage insurance, I will need to provide proof of having taken out a tenant risk policy that meets the conditions set out in Clause 10.2 of the General Terms and Conditions of Participation, by sending the « certificate of insurance » form to the Organiser at least 10 days before the Show’s set-up begins, duly completed, signed and stamped by my insurer.
                                        I acknowledge that, in that case, I will not receive either form of cover making up the Organiser’s insurance policy.</P>


                                    <P class="fs pt-2">I will also read through all the information about the details of my participation in the Show, available in the “Practical Information” section of the Exhibitors’ Space which can be accessed from the Show’s website, and will comply with all its provisions.</P>


                                    <P class="fs pt-2">I am responsible for ensuring that the companies present on my stand respect the General Terms and Conditions of Participation. I am liable for any violation of said terms and conditions by the companies present on my stand, and I undertake to cover the Organiser in respect of any appeal, dispute, charge, judgement or miscellaneous outlay arising from these companies in respect of their participation in the Show.</P>

                                    <P class="fs pt-2">I acknowledge that, if my application to participate in the Show is approved by the Organiser, I will definitively be bound to participate in the Show. Failing that, I must pay a sum to the Organiser, in the name of the penalty clause, of 100% of the total price of my participation in the Show.</P>
                                </div>


                                <div class="bootom-step-4  p-4">
                                    <div class="form-check me-3 ">
                                        <input class="form-check-input" value="yes" type="checkbox" name="basket2" id="bo-5">
                                        <label class="form-check-label" for="bo-5">
                                            <strong>I hereby request to be registered as an exhibitor at Paris International Agricultural Show 2023 and declare having the due authorisations and powers necessary to enter into a contract for this registration.</strong>
                                        </label>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<input type="button" name="next" data-step="seven" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>

<fieldset data-step="eight">
<div class=" tab-5 ">
    <div class="second-tab-list-step2 mt-4 pt-4 ">
        <span class="top-steo-2">Acknowledgement of receipt</span>
        <div class="step-3-top-box Acknowledgement p-3">
            <p class="pt-2 m-0 ">Thank you for submitting your reservation request for Paris International Agricultural Show 2023 .</p>
            <p class="pt-2 m-0">Your request is currently being reviewed by our team.</p>
            <p class="pt-2 m-0 ">We will be in contact as soon as possible.</p>
            <p class="pt-2 m-0">You can view your reservation summary at any time via the email sent to you.</p>
        </div>

    </div>

</div>
<input type="button" name="next" data-step="eight" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>

<fieldset>
<div class="form-card">

    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
    <div class="row justify-content-center">
        <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
    </div> <br><br>
    <div class="row justify-content-center">
        <div class="col-7 text-center">
            <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
        </div>
    </div>
</div>
</fieldset>
                                </div>
                                <?php include 'exhibition-custom/side-basket.php';?>
                            </div>
                        </div>
                        

                                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl product-popup">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="product-model-box ">
                        <ul class="product-model-box-list">
                            <li>
                                <div class="product-model-box-img">
                                <!-- assets/img/pro-1.png -->
                                    <img src="" alt="" class="img-fluid">
                                </div>
                                <p class="fs pt-3 text-end"> NONCONTRACTUAL VISUALS</p>
                            </li>
                            <li>
                                <div class="product-model-box-content">
                                    <h3 class="blue">product-model-box-img</h3>
                                    <div class="refid ">
                                        <p class="pt-3">Ref : <span>STDEQ_003</span></p>
                                        <p class="blue"> €293.50 Excl. VAT / sq.m</p>
                                    </div>
                                    <div class="pt-3 pb-4">
                                        <p>Basic Stand</p>
                                        <P>Minimum area required: 18 sq.m</P>
                                    </div>
                                    <div class="">
                                        <p>Includes:</p>
                                        <ul>
                                            <li>- Floor area and plotting</li>
                                            <li>- Carpet: green, with a protective coverinf</li>
                                            <li>- Melamine partitions included only for ajoining stand (stand on island have no partition)</li>
                                        </ul>
                                    </div>

                                    <p class="pt-3">Does not include: cleaning services, power supply and furniture, that should be ordered on your "Exhibitor's Area".</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        
    </script>
    <?php
    get_footer();
    ?>