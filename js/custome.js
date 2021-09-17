$('.menu-icon').click(function(){
    console.log('okay');
    $(this).toggleClass("change-open");
    $('.menu nav ul').toggleClass("menu-open");
});


$('.filter-cat').click(function(){
  var filtercontainer = $('.filter-container');
  var self = $(this);
  var dataID = self.data('id');
  filtercontainer.removeClass('filter-visible');
  filtercontainer.removeClass('filter-hidden');
  self.addClass('active').siblings().removeClass('active');
  $("#" + dataID).addClass('filter-visible').siblings().addClass('filter-hidden');
  self.parent('.filter-lists').removeClass('filterListOpacityVisible').addClass('filterListOpacityHidden');
  $('.filter-letter').text("'" + dataID + "'");
  $('.filter-letter-top').text("Brands Filtered By ");
});

$('.all-cat').click(function () {
  var filtercontainer = $('.filter-container');
  filtercontainer.removeClass('filter-visible');
  filtercontainer.removeClass('filter-hidden');
  $(this).addClass('active').siblings().removeClass('active');
  $(this).parent('.filter-lists').removeClass('filterListOpacityVisible').addClass('filterListOpacityHidden');
  $('.filter-letter').text(" ");
  $('.filter-letter-top').text("All Brands ");


});
$('.filter-button').on("click touch", function(){
  $('.filter-lists').toggleClass('filterListOpacityHidden').toggleClass('filterListOpacityVisible');
});
$('#filecustom').change(function(e){
  const file_attach = $(this);
  // Get the selected file
  const [file] = e.target.files;
  // Get the file name and size
  const { name: fileName, size } = file;
  // Convert size in bytes to kilo bytes
  const fileSize = (size / 1000).toFixed(2);
  // Set the text content
  const fileNameAndSize = `${fileName} - ${fileSize}KB`;
  $('.file-name').text(fileNameAndSize);
});



