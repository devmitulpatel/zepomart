<?php

namespace Database\Seeders;

use App\Models\SocialNetwork;
use App\Models\StaticPage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StaticPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = StaticPage::class;
        $data = [];
        $this->createBasicData($data);
        seed_model($model, $data);

    }

    private function createBasicData(array &$data)
    {

        $dynamicWebsite=18;

        $data[] = [
            'navigation_id' => $dynamicWebsite,
            'slug' =>  Str::slug('Website Design Development'),
            'title' => 'Website Design Agency Mumbai | Web Development Services in India',
            'keyword' => Str::slug('Website Design Agency Mumbai | Web Development Services in India'),

            'description' => 'Zepomart is the best and top-rated Website design & Development Company in Mumbai. We provide Ecommerce, Corporate, Web redesigning services in India.',
            'content' =>

           '

<div class="panel-center col-xs-12">
				<article id="post-25379" class="post-25379 page type-page status-publish">

					<div class="entry-content post-content">



						<div id="vc_row-61c94a7cc6bd4" class="vc_row wpb_row vc_row-fluid row-this-tabs-kvik"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

	<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom wpb_start_animation animated">
		<div class="wpb_wrapper">
			<h1 style="text-align: center;"><span style="color: #3c3950;"><span class="light">Best and Creative <strong>Website Design and Development Company in Mumbai</strong></span></span></h1>

		</div>
	</div>
<div class="clearboth"></div><div class="gem-divider " style="margin-top: 40px;"></div>
	<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom wpb_start_animation animated">
		<div class="wpb_wrapper">
			<p style="text-align: justify;">Web Design is more than how your product looks; it’s about meeting your business objectives while giving your users a friction-less, memorable experience. We are one of the <strong>top web designing companies in Mumbai</strong> who is passionate about designing websites with a look and feel your audience will love.</p>

		</div>
	</div>
<div class="clearboth"></div><div class="gem-divider " style="margin-top: 85px;"></div></div></div></div></div><div id="vc_row-61c94a7cc809d" class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_tta-container" data-vc-action="collapse"><div class="vc_general vc_tta vc_tta-tabs vc_tta-color-thegem vc_tta-style-outline vc_tta-shape-rounded vc_tta-spacing-2 vc_tta-tabs-position-top vc_tta-controls-align-left"><div class="vc_tta-tabs-container"><ul class="vc_tta-tabs-list"><li class="vc_tta-tab vc_active" data-vc-tab=""><a href="#1528116796493-85b67044-b6f2" data-vc-tabs="" data-vc-container=".vc_tta"><span class="vc_tta-title-text">Ecommerce Website</span></a></li><li class="vc_tta-tab" data-vc-tab=""><a href="#1454061186057-2aeed6a5-30ba" data-vc-tabs="" data-vc-container=".vc_tta"><span class="vc_tta-title-text">Corporate Website</span></a></li><li class="vc_tta-tab" data-vc-tab=""><a href="#1528116793926-919c798a-17c2" data-vc-tabs="" data-vc-container=".vc_tta"><span class="vc_tta-title-text">Website Redesigning</span></a></li><li class="vc_tta-tab" data-vc-tab=""><a href="#1528116791340-b8fffb30-2785" data-vc-tabs="" data-vc-container=".vc_tta"><span class="vc_tta-title-text">Website Management</span></a></li></ul></div><div class="vc_tta-panels-container"><div class="vc_tta-panels"><div class="vc_tta-panel vc_active" id="1528116796493-85b67044-b6f2" data-vc-content=".vc_tta-panel-body"><div class="vc_tta-panel-heading"><h4 class="vc_tta-panel-title"><a href="#1528116796493-85b67044-b6f2" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Ecommerce Website</span></a></h4></div><div class="vc_tta-panel-body"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1454147445772"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_single_image wpb_content_element vc_align_left">

		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="https://www.finplus.co.in/wp-content/uploads/2018/06/11000x600.jpg" width="1000" height="600" alt="Ecommerce Website Design Company" title="Ecommerce Website Design Agency in India"></div>
		</figure>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p>A website helps you to showcase your products digitally, it eliminates the geographical boundaries and makes your brand globally available. Website with an effective products display and right user interface can really add value to your business.</p>
<p>CMS based, WordPress website, Magento website, Shopify Website… You name it – We code it!</p>
<p>We at FinPlus Web, design top-notch eCommerce websites suitable for your business and create a smoother user experience for your visitors.</p>

		</div>
	</div>
</div></div></div></div><div class="clearboth"></div><div class="gem-divider " style="margin-top: -40px;"></div></div></div><div class="vc_tta-panel" id="1454061186057-2aeed6a5-30ba" data-vc-content=".vc_tta-panel-body"><div class="vc_tta-panel-heading"><h4 class="vc_tta-panel-title"><a href="#1454061186057-2aeed6a5-30ba" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Corporate Website</span></a></h4></div><div class="vc_tta-panel-body"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1454147445772"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><span style="font-weight: 400;">Be it for a large corporation or an SME, our code ninjas are ready to design and develop Static / Dynamic / Informative or Portfolio website that enhances your corporate identity.</span></p>

		</div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_single_image wpb_content_element vc_align_left">

		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="https://www.finplus.co.in/wp-content/uploads/2018/06/31000x600.jpg" width="1000" height="600" alt="Website Designers india" title="Website Redesigning Services in Mumbai"></div>
		</figure>
	</div>
</div></div></div></div><div class="clearboth"></div><div class="gem-divider " style="margin-top: -40px;"></div></div></div><div class="vc_tta-panel" id="1528116793926-919c798a-17c2" data-vc-content=".vc_tta-panel-body"><div class="vc_tta-panel-heading"><h4 class="vc_tta-panel-title"><a href="#1528116793926-919c798a-17c2" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Website Redesigning</span></a></h4></div><div class="vc_tta-panel-body"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1454147445772"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><span style="font-weight: 400; text-align: justify;">Is your website Mobile friendly?<br>
Is your website loading fast?</span><br>
<span style="font-weight: 400; text-align: justify;">Are you still not happy with your look and feel of your website?<br>
Well, we are here to recreate your first impression. Our Website designers are equipped for creating attractive and catchy designs along with various other advancements like Video Optimization, Image Optimization, Breadcrumb Navigation, Keyword Optimization etc.</span><br>
<span style="font-weight: 400; text-align: justify;">These improvements will make the site easy to navigate, very appealing and search engine friendly which results in more traffic and better conversions.</span></p>
<p><span style="font-weight: 400; text-align: justify;">Our team not only sits with you to understand your business goals but put themselves in your position and visualizes the end goals too.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>

		</div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_single_image wpb_content_element vc_align_left">

		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="https://www.finplus.co.in/wp-content/uploads/2018/06/41000x600.jpg" width="1000" height="600" alt="Unique Websites Designs in india" title="Creative website designs and Development in Mumbai"></div>
		</figure>
	</div>
</div></div></div></div><div class="clearboth"></div><div class="gem-divider " style="margin-top: -40px;"></div></div></div><div class="vc_tta-panel" id="1528116791340-b8fffb30-2785" data-vc-content=".vc_tta-panel-body"><div class="vc_tta-panel-heading"><h4 class="vc_tta-panel-title"><a href="#1528116791340-b8fffb30-2785" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Website Management</span></a></h4></div><div class="vc_tta-panel-body"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1454147445772"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_single_image wpb_content_element vc_align_left">

		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="https://www.finplus.co.in/wp-content/uploads/2018/06/21000x600.jpg" width="1000" height="600" alt="Website Designing and Development Agency in India" title="Website Designing Company"></div>
		</figure>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><span style="font-weight: 400; text-align: justify;">Your website or webstore requires almost continuous management and maintenance.</span></p>
<p><span style="font-weight: 400; text-align: justify;">This remains true, regardless of the number of services or products you offer. Failing to properly manage your website can be costly, particularly if neglect results in downtime, technical faults, pricing errors, as this can impact both immediate sales and customer loyalty.</span></p>
<p><span style="font-weight: 400; text-align: justify;">Unfortunately, taking the time to manage your site can also mean your team take time away from running the business. That’s why we manage all of this for our clients to ensure each site is performing to its best 24-hours a day, seven days a week.</span></p>

		</div>
	</div>
</div></div></div></div><div class="clearboth"></div><div class="gem-divider " style="margin-top: -40px;"></div></div></div></div></div></div></div><div class="vc_empty_space" style="height: 80px"><span class="vc_empty_space_inner"></span></div>
</div></div></div></div><div id="vc_row-61c94a7cce8e6" class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">

		</div>
	</div>
</div></div></div></div><div id="vc_row-61c94a7ccef7f" class="vc_row wpb_row vc_row-fluid vc_custom_1453456214909"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1453455696972"><div class="wpb_wrapper"><div id="fullwidth-block-61c94a7ccf3cc" class="fullwidth-block clearfix" style="background-color: rgb(0, 188, 212); width: 1263px; left: -46.5px;"><script type="text/javascript">if (typeof(gem_fix_fullwidth_position) == "function") { gem_fix_fullwidth_position(document.getElementById("fullwidth-block-61c94a7ccf3cc")); }</script><div class="fullwidth-block-inner"><div class="container"><div class="gem-textbox centered-box"><div class="gem-textbox-inner" style=""><div class="gem-textbox-content" style="background-position: center top;padding-top: 20px;padding-bottom: 20px;"><div class="gem-button-container gem-button-position-inline"><a class="gem-button gem-button-size-medium gem-button-style-flat gem-button-text-weight-normal gem-button-icon-position-left" style="border-radius: 25px;background-color: #3c3950;color: #00ffff;"  href="https://www.finplus.co.in/contact/" target="_blank"><i class="gem-print-icon gem-icon-pack-material"></i>Go Online</a></div> </div></div></div></div></div></div></div></div></div></div>

					</div>






				</article><!-- #post-## -->

			</div>

            ',
            'attach_contact_form' => 1,
            'contact_form_position' =>'right',
        ];

    }
}
