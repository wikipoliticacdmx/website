import React, { Component } from 'react';
import './Home.css';
import wikilogo from '../assets/wikilogo.png'
import { Container, Row, Col } from 'reactstrap'

class Home extends Component {
  render() {
    return (
      <div className="Home">
        <Container>
          <Row>
            <Col xs={12} className="d-flex justify-content-center align-items-center">
              <img className="img-fluid logo" src={wikilogo} />
            </Col>
          </Row>
          <Row>
            <Col xs={12}>
              <p className="text-center">Somos un movimiento político que trabaja para crear un país con futuro. Creemos en la colectividad y la participación. Creemos que somos muchas las personas que queremos un cambio. Creemos que es tiempo de juntarnos y actuar.</p>
            </Col>
          </Row>
        </Container>
      </div>
    );
  }
}

export default Home;
