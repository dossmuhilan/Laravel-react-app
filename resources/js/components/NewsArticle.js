import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import { BrowserRouter as Router, Link, Route } from "react-router-dom";
import List from './List';

class NewsArticle extends Component {
    constructor(props) {
        super(props);
        this.state = {
            post:{},
            news:[]
        }
    }
    componentDidMount(){
        axios.get("/apipost/"+this.props.match.params.id).then(response => {
            this.setState({post:response.data[0]})
            console.log(response);
        }).catch(errors=> {
            console.log(errors)
        });

        axios.get('/apinews').then(response=>{
            console.log({news:response});
            this.setState({news:response.data});
        }).catch(errors=>{
            console.log(errors);
        })
    }
    componentWillUnmount() {
        // fix Warning: Can't perform a React state update on an unmounted component
        this.setState = (state,callback)=>{
            return;
        };
    }
    onFieldChange(event) {
        // for a regular input field, read field name and value from the event
        const fieldValue = event.target.value;
        console.log("test1234");
        this.props.onChange(fieldValue);
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
                {/* <Router> */}
                    <div className="row">
                    { 
                        this.state.news.map( data => 
                                <div key={data.id}>
                                    {/* <button key={data.id} onClick={this.onFieldChange.bind(this)}>{data.type}</button> */}
                                    {/* <Link to={"/listType/" + data.type}>
                                        <span className="listImage" >{data.type}</span> 
                                    </Link> */}
                                    <Link className="p-3" to={"/news/" + data.type}><span className="listImage p-1 rounded border" >{data.type}</span>  </Link>
                                </div>
                        )
                    }
                    </div>
                {/* </Router> */}
                </div>
            </div>
        );
        
    }
}

export default NewsArticle;