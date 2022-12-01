const eventKeper = (self)=>{
    $('.keper-desc').addClass('d-none');
    $('.keper-list').removeClass('background-secondary-one');
    const getKeperDesc = self.querySelector('.keper-wrapper-desc .keper-desc');
    self.classList.toggle('background-secondary-one')
    getKeperDesc.classList.toggle('d-none')
 }

 $('.card-testimoni').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
]
});

$('.daftar-dapro').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
  ]
  });