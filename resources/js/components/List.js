import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Link, Route } from "react-router-dom";
import axios from 'axios';

class List extends Component {
    constructor(props) {
        console.log(props,"const");
        super(props);
        this.state = {
            news:[],
            currentType:null
        }
    }
    componentDidMount(){
        console.log(this.props, 'component');
        if(this.props.match && this.props.match.params.type){
            console.log(this.props, 'IF');
            axios.get('/apinews/'+this.props.match.params.type).then(response=>{
                console.log({news:response});
                this.setState({news:response.data});
            }).catch(errors=>{
                console.log(errors);
            })
        }
        else {
            console.log(this.props, 'ELSE');
            axios.get('apinews').then(response=>{
                console.log({news:response});
                this.setState({news:response.data});
            }).catch(errors=>{
                console.log(errors);
            })
        }

    }
    onTypeChange(currentType){
        this.setState({...this.state,
            currentType :  currentType
        });
    }
    componentWillUnmount() {
        // fix Warning: Can't perform a React state update on an unmounted component
        this.setState = (state,callback)=>{
            return;
        };
    }
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-12">
                        <div className="card">
                            <div className="card-header">News List </div>
                                
                            { 
                                this.state.news.map( data => 
                                <div className="card-body row" key={data.id}> 
                                    <div className="col-md-4">
                                        <Link to={"/post/" + data.id}><img className="listImage" src={data.image}></img> </Link>
                                    </div>
                                        <div className="col-md-8">
                                            
                                        <Link to={"/post/" + data.id}><h3>{data.name}</h3></Link>
                                            <h6>{data.short_desc}</h6>
                                        </div>
                                </div>) 
                            }
                        </div>
                    </div>
                </div>
            </div>
        );
        
    }
}

export default List;

if (document.getElementById('list')) {
    ReactDOM.render(<List />, document.getElementById('list'));
}
