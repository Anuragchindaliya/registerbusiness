import React from 'react'
import Image from "next/image"

const Hero = () => {
    return (
        <>
            {/* second */}
            <section className="hero" style={{ backgroundImage: 'url("/images/first.jpg")' }}>
                <div className="px-4 py-5 my-5 text-center text-white" style={{ backgroundColor: 'rgba(0,0,0,.5)' }}>
                    <Image className="brand-logo d-block mx-auto mb-4" src="/images/web2rise.png" alt="" width={100} height={100} />
                    <h1 className="display-5 fw-bold">web2rise</h1>
                    <div className="col-lg-6 mx-auto">
                        <p className="lead mb-4">Website Matlab Web2Rise <br />Available All Time</p>
                        <div className="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <button type="button" className="btn btn-primary btn-lg px-4 gap-3">Get Quote</button>
                            {/* <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> */}
                        </div>
                    </div>
                </div>
            </section>
        </>
    )
}

export default Hero
