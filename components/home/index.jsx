import React from 'react'
import BusinessCards from './BusinessCards'
import SearchSection from './searchSection'

const Home = ({ allBusiness }) => {
    return (
        <>
            <SearchSection />
            <BusinessCards allBusiness={allBusiness} />
        </>
    )
}

export default Home
