import React from 'react'
import Image from "next/image"
import web2riseLogo from "../../public/images/web2rise.png"
const Gallery = () => {
  return (
    <>
      <div className="album py-5 bg-light">
        <div className="container">
          <h1 className="display-4 fw-normal text-center mb-5">Gallery</h1>
          <div className="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div className="col">
              <div className="card shadow-sm">
                <div className="image_wrapper" >
                  {/* layout properties fill,fixed,intrinsic,responsive,undefined. */}
                  <Image className="gallery_img" src="/images/web2rise.png" layout="fill" width={500} height={"476px"} alt="" />
                </div>

                <div className="card-body">
                  <p className="card-text text-center">abc</p>

                </div>
              </div>
            </div>
            <div className="col">
              <div className="card shadow-sm">
                <div>
                  <Image className="gallery_img" src="https://www.web2rise.com/wp-content/uploads/2021/11/w2r-logo-1.png" alt="web2rise" layout="fill" />
                </div>
                <div className="card-body">
                  <p className="card-text text-center">xyz</p>
                </div>
              </div>
            </div>
            <div className="col">
              <div className="card shadow-sm">
                <Image src="/images/web2rise.png" alt="" width="100%" height="276px" priority />
                <div className="card-body">
                  <p className="card-text text-center">new</p>
                </div>
              </div>
            </div>
            <div className="col">
              <div className="card shadow-sm">
                <Image src="/images/web2rise.png" alt="" width="100%" height="276px" />
                <div className="card-body">
                  <p className="card-text text-center">four</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}

export default Gallery
