import React, { Component, useEffect } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import { BrowserRouter as Router, Link, Route } from "react-router-dom";
import List from './List';

function NewsArticle(props) {
    
    useEffect(() => {
        console.log(props, 'child componet');
      });
    // constructor(props) {
    //     super(props);
    //     this.state = {
    //         post: {},
    //         news: []
    //     }
    // }
    // componentDidMount(){
    //     console.log(this, 'artical')
    //     axios.get("/list/"+this.props.currentId).then(response => {
    //         this.setState({post:response.data[0]})
    //     }).catch(errors=> {
    //         console.log(errors)
    //     });

    //     axios.get('/list').then(response=>{
    //         console.log({news:response});
    //         this.setState({news:response.data});
    //     }).catch(errors=>{
    //         console.log(errors);
    //     })
    // }
    
    // onFieldChange(event) {
    //     // for a regular input field, read field name and value from the event
    //     const fieldValue = event.target.value;
    //     console.log("test1234");
    //     this.props.onChange(fieldValue);
    // }
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
                    <div>
                    { 
                        this.state.news.map( data => 
                                <div key={data.id}>
                                        <span className="listImage" >{data.type}</span> 
                                </div>
                        )
                    }
                    </div>
                {/* </Router> */}
                </div>
            </div>
        );      
}

export default NewsArticle;