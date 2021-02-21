import React from "react";
import styled, { createGlobalStyle, css } from "styled-components";
import { FaFacebookF, FaGithub, FaLinkedinIn } from "react-icons/fa";
import { GrMail } from "react-icons/gr";

const GlobalStyle = createGlobalStyle`
  @font-face
  {
    font-family: 'GeosansLight';
    src: url('/fonts/GeosansLight.ttf');
  }

  *
  {
    font-family: 'GeosansLight', Helvetica, Arial, sans-serif;
    font-size: 1.2rem;
  }

  body {
    background: rgb(245,245,245);
    background: linear-gradient(0deg, rgba(245,245,245,1) 0%, rgba(131,144,148,0.1) 50%);
    height: 100vh;
    width: 100vw;
  }

  a {
    text-decoration: none;
    color: unset;
  }
`;

const Wrapper = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;

  @media only screen and (min-width: 600px) {
    width: 80vw;
    margin: auto;
  }
`;

const Greeting = styled.h1`
  margin-top: 10vh;
  font-size: 3rem;

  @media only screen and (min-width: 600px) {
    margin-top: 20vh;
    font-size: 5rem;
  }
`;

const Divider = styled.div`
  border-top: 3px solid #aaa;
  border-radius: 2px;
  width: 80vw;
`;

const ContactWrapper = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 10vh;
`;

const ContactText = styled.div`
  margin-top: 10vh;
  font-size: 2.5rem;

  @media only screen and (min-width: 600px) {
    font-size: 4rem;
  }
`;

const ContactLinks = styled.div`
  display: flex;
  justify-content: space-around;
  margin-top: 5vh;
  flex-wrap: wrap;
`;

const contactIconStyle = css`
  height: 5rem;
  width: 5rem;

  margin: 2vw;

  &:hover {
    fill: rgba(0, 0, 0, 0.6);
    cursor: pointer;
  }
  &:active {
    fill: rgba(0, 0, 0, 0.7);
    cursor: pointer;
  }
`;

const FacebookIcon = styled(FaFacebookF)`
  ${contactIconStyle}
`;

const LinkedInIcon = styled(FaLinkedinIn)`
  ${contactIconStyle}
`;
const GitHubIcon = styled(FaGithub)`
  ${contactIconStyle}
`;

const MailIcon = styled(GrMail)`
  ${contactIconStyle}
`;

const App = () => {
  return (
    <>
      <GlobalStyle />
      <Wrapper>
        <Greeting>Hi there! 🙋‍♂️</Greeting>
        <Divider />
        <ContactWrapper>
          <ContactText>Contact me at</ContactText>
          <ContactLinks>
            <a href="https://www.facebook.com/oskarrn93" title="Facebook">
              <FacebookIcon />
            </a>
            <a href="https://www.linkedin.com/in/oskarrosen" title="LinkedIn">
              <LinkedInIcon />
            </a>
            <a href="https://github.com/oskarrn93" title="GitHub">
              <GitHubIcon />
            </a>
            <a
              href="mailto:&#111;&#115;&#107;&#97;&#114;&#64;&#111;&#115;&#107;&#97;&#114;&#114;&#111;&#115;&#101;&#110;&#46;&#99;&#111;&#109;"
              target="_top"
              title="Email"
            >
              <MailIcon />
            </a>
          </ContactLinks>
        </ContactWrapper>
      </Wrapper>
    </>
  );
};

export default App;
