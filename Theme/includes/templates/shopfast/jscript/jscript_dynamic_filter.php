<?php
/**
 * jscript_dynamic_filter
 *
 * @package page
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Damian Taylor
 */
?>

<?php
if (($this_is_home_page == false && FILTER_CATEGORY == 'Yes' && FILTER_OPTIONS_STYLE == 'Expand') || (FILTER_FEATURED == 'Yes' && FILTER_OPTIONS_STYLE == 'Expand') || (FILTER_SEARCH == 'Yes' && FILTER_OPTIONS_STYLE == 'Expand') || (FILTER_ALL == 'Yes' && FILTER_OPTIONS_STYLE == 'Expand') || (FILTER_NEW == 'Yes' && FILTER_OPTIONS_STYLE == 'Expand') || (FILTER_SPECIALS == 'Yes' && FILTER_OPTIONS_STYLE == 'Expand'))
{
?>
<script type="text/javascript" >
// Dynamic filter boxes
$("div.dynamicfilterContent").eq(0).ready(function()
{
// Show more link if appropriate
  $('ul.dFilterExpand').each(function()
  {
    if ( $(this).prop("scrollHeight") > 130 ) $(this).height(130).siblings('a.dFilterToggle').show();
  });
// Expand/collapse
  $("a.dFilterToggle").click(function()
  {
    if ( $(this).siblings("ul.dFilterExpand").height() == 130 )
    {
      $('.dFilterToggleImg',$(this)).attr('src', $('.dFilterToggleImg').attr('src').replace('_more', '_less')).attr('alt', '<?php echo TEXT_DYNAMIC_FILTER_SHOW_LESS ; ?>').attr('title', '<?php echo TEXT_DYNAMIC_FILTER_SHOW_LESS ; ?>');
      $(this).html($(this).html().replace("<?php echo TEXT_DYNAMIC_FILTER_SHOW_MORE ; ?>", "<?php echo TEXT_DYNAMIC_FILTER_SHOW_LESS ; ?>"));
      $(this).siblings("ul.dFilterExpand").animate({height: $(this).siblings("ul.dFilterExpand").prop("scrollHeight")}, "slow");
    }
    else
    {
      $('.dFilterToggleImg',$(this)).attr('src', $('.dFilterToggleImg').attr('src').replace('_less', '_more')).attr('alt', '<?php echo TEXT_DYNAMIC_FILTER_SHOW_MORE ; ?>').attr('title', '<?php echo TEXT_DYNAMIC_FILTER_SHOW_MORE ; ?>');
      $(this).html($(this).html().replace("<?php echo TEXT_DYNAMIC_FILTER_SHOW_LESS ; ?>", "<?php echo TEXT_DYNAMIC_FILTER_SHOW_MORE ; ?>"));
      $(this).siblings("ul.dFilterExpand").animate({height: 130}, "slow");
    }
  return false;
  });
});
</script>
<?php
}
?>
