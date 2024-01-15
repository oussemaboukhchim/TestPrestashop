<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class SubCategorySlider extends Module
{
    public function __construct()
    {
        $this->name = 'subcategoryslider';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Oussema boukhchim';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.6.0',
            'max' => '1.7.9'
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('SubCategories Slider');
        $this->description = $this->l('Display Subcategories slider in products list.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->l('No name provided.');
        }

  
    }

    public function install()
    {
        if (!parent::install() ) {
            return false;
        }
        $this->registerHook('DisplaySubCategories') ;
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }

        return true;
    }

    public function hookDisplaySubCategories($category)
    {
        $this->context->controller->registerStylesheet('modules-subcategoryslider', 'modules/'.$this->name.'/views/css/subcategoryslider.css', ['media' => 'all', 'priority' => 150]);
       
        $subcategories = $this->getSubcategories($category);
        $this->context->smarty->assign('subcategories', $subcategories);

        return $this->display(__FILE__, 'views/templates/hook/subcategoryslider.tpl');
    }

    private function getSubcategories($category)
    {
        $currentCategoryId = $category['category']['id'];

        $subcategories = array();

        if ($currentCategoryId > 0) {
            $subcategoriesData = Category::getChildren($currentCategoryId, $this->context->language->id);

            foreach ($subcategoriesData as $subcategoryData) {
                $subcategory = new Category($subcategoryData['id_category']);
                
                $products = $subcategory->getProductsWs();
                $subcategories[] = array(
                    'name' => $subcategory->name[1],
                    'image_url' => $this->context->link->getCatImageLink($subcategory->link_rewrite, $subcategory->id_image),
                    'product_count' =>count($products),
                );
            }
        }
        
        return $subcategories;
    }
}
