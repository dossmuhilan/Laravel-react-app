import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import "../css/app.css";
import { BrowserRouter as Router, Link, Route, Switch, Redirect } from "react-router-dom";
import List from './components/List';
import ListType from './components/ListType';
import Example from './components/Example';
import NewsArticle from "./components/NewsArticle";

class Index extends Component {
    render(){
        return (
            <div className="container">
                <Router>
                    <div>
                        <div className="row">
                        <Link className="p-3" to="/">Home</Link>
                        <Link className="p-3" to="/news">News</Link>
                        </div>
                        <Switch>
                            {/* <Route exact path="/">
                                <Redirect to="/news" />
                            </Route> */}
                        <Route path="/news" exact component={List}/>
                        <Route path="/news/:type" exact render={props => <List{...props}/> }/>
                        <Route path="/" exact component={Example}/>
                        <Route path="/post/:id" exact render={props => <NewsArticle{...props}/> }/>
                        </Switch>
                    </div>
                </Router>
            </div>
        );
    }
}

export default Index;

if (document.getElementById('list')) {
    ReactDOM.render(<Index />, document.getElementById('list'));
}
ReactDOM.render(<Index />, document.getElementById('home'));
