const SearchSection = () => {
    return (
        <>
            <div className="container mt-5">
                <div className="row d-flex justify-content-center align-items-center">
                    <div className="col-md-8">
                        <div className="search"> <i className="fa fa-search" />
                            <input type="text" className="form-control" placeholder="Search Business.." id="searchBusiness" /> <button className="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}

export default SearchSection
