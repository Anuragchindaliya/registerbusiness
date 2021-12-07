import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHome, faPhone } from '@fortawesome/free-solid-svg-icons';
import { faWhatsapp } from '@fortawesome/free-brands-svg-icons';

const Footer = () => {
    return (
        <>
            <footer className="container-fluid bg-dark text-white fixed-bottom">
                <div className="row">
                    <div className="col">
                        <a href="https://www.google.com/maps/place/Web2Rise+-+Best+Digital+Marketing+Company+in+Faridabad,+Chacha+Chowk,+Baba+Mandi,+near+Dayal+Hospital,+NIT,+Faridabad,+Haryana+121005/@28.355987,77.277213,16z/data=!4m2!3m1!1s0x390cdf67263924fb:0x152b7f9a003ab111?hl=en&gl=IN" target="_blank" className="nav-link text-white text-center" rel="noopner noreferrer">
                            <div><FontAwesomeIcon icon={faHome} size="xs" style={{ width: "30px" }} /></div>
                            Location
                        </a>
                    </div>
                    <div className="col">
                        <a href="tel:+91-8512854666" target="_blank" className="nav-link text-white text-center" rel="noopner noreferrer">
                            <div><FontAwesomeIcon icon={faPhone} size="xs" style={{ width: "30px" }} /></div>
                            Number
                        </a>
                    </div>
                    <div className="col">
                        <a href="https://wa.me/918010334416" target="_blank" className="nav-link text-white text-center" rel="noopner noreferrer">
                            <div><FontAwesomeIcon icon={faWhatsapp} size="xs" style={{ width: "30px" }} /></div>
                            Whatsapp
                        </a>
                    </div>
                </div>
                <div className="d-flex flex-wrap align-items-center justify-content-center">
                    {/* <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
              <use xlink:href="#bootstrap"></use>
            </svg>
          </a> */}
                    {/* <ul class="nav col-12 col-lg-auto  justify-content-center my-md-0 text-small">
        <li>
          <a href="tel:+91-Nangla chowk, Nanin Market, faridabad" class="nav-link text-white text-center ">
            <div><i class="fa fa-home"></i></div>
            Home
          </a>
        </li>
        <li>
          <a href="tel:+91-8512854666" class="nav-link text-white text-center ">
            <div><i class="fa fa-phone"></i></div>
            Number
          </a>
        </li>
        <li>
          <a href="https://wa.me/918010334416" class="nav-link text-white text-center ">
            <div><i class="fab fa-whatsapp"></i></div>
            Whatsapp
          </a>
        </li>
        <li>
              <a href="#" class="nav-link text-white text-center ">
              <div><i class="fa fa-home"></i></div>
                Products
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white text-center ">
              <div><i class="fa fa-home"></i></div>
                Customers
              </a>
            </li>
      </ul> */}
                </div>
            </footer>
        </>
    )
}

export default Footer
