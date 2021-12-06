import React from 'react'

const Map = () => {
    return (
        <>
            <div className="container-fluid py-5">
                <h1 className="text-center mb-2">Contact Address</h1>
                {/* <hr> */}
                <div className="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3511.094687399321!2d77.27502441482453!3d28.355986782527694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdf67263924fb%3A0x152b7f9a003ab111!2sWeb2Rise%20-%20Best%20Digital%20Marketing%20Company%20in%20Faridabad!5e0!3m2!1sen!2sin!4v1634826390032!5m2!1sen!2sin" width={600} height={450} style={{ border: 0 }} allowFullScreen loading="lazy" />
                    {/* <iframe src="https://www.google.com/maps/dir/28.3639808,77.2767744/web2rise/@28.3645571,77.276904,17z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x390cdea61b83d673:0x8ac0da8104bf48dc!2m2!1d77.2817291!2d28.365944" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe> */}
                </div>
                {/* <div class="row text-center">
      <div class="col-4 box1 pt-4">
        <a href="tel:+123456789"><i class="fas fa-phone fa-3x"></i>
          <h3 class="d-none d-lg-block d-xl-block">Phone</h3>
          <p class="d-none d-lg-block d-xl-block">8512854666</p>
        </a>
      </div>
      <div class="col-4 box2 pt-4">
        <a href=""><i class="fas fa-home fa-3x"></i>
          <h3 class="d-none d-lg-block d-xl-block">Address</h3>
          <p class="d-none d-lg-block d-xl-block">Nangla chowk, Nanin Market, faridabad</p>
        </a>
      </div>
      <div class="col-4 box3 pt-4">
        <a href="mailto:test@test.com"><i class="fas fa-envelope fa-3x"></i>
          <h3 class="d-none d-lg-block d-xl-block">Whatsapp</h3>
          <p class="d-none d-lg-block d-xl-block">8010334416</p>
        </a>
      </div>
    </div> */}
            </div>
        </>
    )
}

export default Map
