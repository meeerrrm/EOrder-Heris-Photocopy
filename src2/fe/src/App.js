import React from 'react';
import LandingPage from 'pages/landingPage';
import OrderCheck from 'pages/ordersCheckPage';
import {
  BrowserRouter,
  Routes,
  Route
} from "react-router-dom";

function App() {
  return (
    <BrowserRouter>
      <Routes>
      <Route path="/" element={<LandingPage />} />
      <Route path="/orders-check" element={<OrderCheck />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;
