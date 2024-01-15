{if isset($subcategories) && count($subcategories) > 0}
   <div class="subcategory-slider">
      {foreach $subcategories as $subcategory}
         <div class="subcategory-item">
            <div class="circle-image">
               <img src="{$subcategory.image_url}" alt="{$subcategory.name}">
            </div>
            <div class="subcategory-info">
               <h6>{$subcategory.name}</h6>
               <p>{$subcategory.product_count} Produits</p>
            </div>
         </div>
      {/foreach}
   </div>
{/if}
