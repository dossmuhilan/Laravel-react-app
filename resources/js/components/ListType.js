import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import { BrowserRouter as Router, Link, Route } from "react-router-dom";
import List from './List';

class ListType extends Component {
    constructor(props) {
        super(props);
        this.state = {
            post:{},
            news:[]
        }
    }
    componentDidMount(){
        axios.get("/listType/"+this.props.match.params.id).then(response => {
            console.log({news:response});
            this.setState({news:response.data});
        }).catch(errors=> {
            console.log(errors)
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
            <div className="col-md-12">
                <h1>{this.state.post.name}</h1>
                <h2>{this.state.post.short_desc}</h2>
                <div className="row">
                    <img className="listImage" src={this.state.post.image} alt=""></img>
                </div>
                <h3>{this.state.post.description}</h3>
                <p>{this.state.post.content}</p>

                <div className="row">
                <Router>
                    <div>
                    { 
                        this.state.news.map( data => 
                                <div>
                                    <Link to={"/listType/" + data.type}>
                                        <span className="listImage" >{data.type}</span> 
                                    </Link>
                                </div>
                        )
                    }
                    </div>
                </Router>
                </div>
            </div>
        );
        
    }
}

export default ListType;