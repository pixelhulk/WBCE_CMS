//:Create a next link to your page
//:Display a link to the next page on the same menu level
$info = show_menu2(0, SM2_CURR, SM2_START, SM2_ALL|SM2_BUFFER, '[if(class==menu-current){[level] [sib] [sibCount] [parent]}]', '', '', '');