<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    $dark: #0a001a;
$color-yellow: #f2c855;ll
$color-purple: #111111;
$white-and-gray-light-gray: #e2e0e5;

footer {
  display: flex;
  flex-direction: column;
  background-color: $color-purple;
  font-family: 'Plus Jakarta Sans', sans-serif;
}

.footer {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 3vw;
  padding: 72px 8vw;
  color: $white-and-gray-light-gray;

  .h5 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 12px;
  }
  .brand .h5 {
    display: flex;
    text-transform: uppercase;
    gap: 16px;
  }

  > div {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 20px;
  }

  .brand {
    max-width: 200px;
    gap: 24px;
    line-height: 1.5;
  }
}

.newsletter {
  position: relative;
  input {
    font-size: 16px;
    font-weight: 400;
    height: 53px;
    padding: 6px 6px 6px 16px;
    background: transparent;
    border: 1px solid $white-and-gray-light-gray;
    color: $white-and-gray-light-gray;
    outline: none;
    border-radius: 14px;
    font-size: 16px;
    width: 370px;
  }

  button {
    position: absolute;
    padding: 16px 40px;
    height: 53px;
    border-radius: 10px;
    border: none;
    background-color: $color-yellow;
    font-size: 16px;
    font-weight: 500;
    color: $color-purple;
    right: 6px;
    top: 6px;
    transition: all .5s;

    &:hover {
      cursor: pointer;
      border-radius: 70px 10px 70px 10px;
      box-shadow: -10px 0px $white-and-gray-light-gray;
    }
  }
}

.social {
  display: flex;
  flex-direction: row;
  gap: 16px;

  .social-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    background-color: rgba(255, 255, 255, 0.21);
    border-radius: 20% 20% 20% 20%;
  }
  a {
    transition: all .3s ease;
  }
  a:hover {
    box-shadow: 0px 0px 20px 1px #726193;
    transform: scale(1.1);
  }
}

.copyright {
  display: flex;
  justify-content: space-between;
  gap: 10px;
  padding: 32px 8vw;
  background-color: $color-yellow;
  a {
    color: $dark;
    margin: 0 1vw 0 1vw;

    &:last-child {
      margin-right: 0;
    }

    &::before {
      background-color: $dark !important;
    }
  }
}

p, a {
  font-size: 16px;
  font-weight: 400;
}

a {
  color: $white-and-gray-light-gray;
  text-decoration: none;
}

footer a {
  position: relative;

  &:not(.social-icon)::before {
    background-color: $white-and-gray-light-gray;
    content: '';
    position: absolute;
    width: 100%;
    height: 1px;
    border-radius: 4px;
    bottom: 0;
    left: 0;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .3s ease-in-out;
  }

  &:hover::before {
    transform-origin: left;
    transform: scaleX(1);
  }
}

@media (max-width: 960px) {
  .footer {
    gap: 72px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr;

    .brand {
      max-width: 400px !important;
    }
  }

  .subscribe {
    display: block;
    grid-column-start: 1;
    grid-column-end: 3;
    .newsletter {
      width: 100%;
      max-width: 370px;
    }
    .newsletter input {
      width: calc(100% - 22px);
    }
  }

  .copyright {
    padding: 32px 5vw;
    p, a {
      font-size: 14px;
    }
  }

  .footer {
    padding: 72px 8vw;
  }
}

@media (max-width: 360px) {
  p, a {
    font-size: 14px;
  }

  .footer .h5 {
    font-size: 16px;
  }
}

</style>
<body>
    <footer>
        <section class="footer">
          <div class="brand">
            <div class="h5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
      <path fill="#F2C855" d="M3.671 2.832H3.67a.855.855 0 0 0-.854.859V16.57c0 .472.386.858.86.859 1.999.005 5.348.421 7.658 2.839V6.79c0-.16-.04-.31-.118-.435C9.32 3.3 5.675 2.837 3.671 2.832ZM21.185 16.57V3.69a.855.855 0 0 0-.854-.859h-.002c-2.004.005-5.648.469-7.544 3.523a.823.823 0 0 0-.118.435v13.477c2.31-2.418 5.66-2.835 7.659-2.84a.862.862 0 0 0 .86-.858Z"/>
      <path fill="#F2C855" d="M23.141 5.802h-.622V16.57a2.197 2.197 0 0 1-2.19 2.192c-1.696.004-4.492.336-6.472 2.21 3.425-.839 7.035-.294 9.092.175A.857.857 0 0 0 24 20.31V6.661a.86.86 0 0 0-.859-.859ZM1.481 16.57V5.801H.86a.86.86 0 0 0-.86.86v13.648a.857.857 0 0 0 1.05.837c2.058-.47 5.668-1.014 9.093-.176-1.98-1.873-4.776-2.205-6.472-2.209a2.197 2.197 0 0 1-2.19-2.192Z"/>
    </svg>
     Read me.</div>
            <p>General Science is a group of subjects Physics, Chemistry, Biology,Life Science</p>
            <div class="social">
              <a href="#twitter" class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="none" viewBox="0 0 20 16">
                  <path fill="#F2C855" d="M6.038 16c7.246 0 11.208-6.155 11.208-11.492 0-.175-.003-.35-.011-.523A8.127 8.127 0 0 0 19.2 1.894a7.702 7.702 0 0 1-2.262.636A4.038 4.038 0 0 0 18.67.296c-.773.47-1.62.802-2.501.98A3.89 3.89 0 0 0 13.293 0c-2.175 0-3.94 1.809-3.94 4.039 0 .317.035.625.103.92C6.182 4.792 3.28 3.184 1.336.74a4.107 4.107 0 0 0-.533 2.03c0 1.402.695 2.639 1.753 3.363a3.837 3.837 0 0 1-1.784-.505v.051c0 1.956 1.357 3.59 3.16 3.96a3.853 3.853 0 0 1-1.78.069c.502 1.605 1.956 2.773 3.68 2.805A7.78 7.78 0 0 1 0 14.185 10.951 10.951 0 0 0 6.038 16"/>
                </svg>
              </a>
              <a href="#fb" class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" fill="none" viewBox="0 0 11 20">
                  <path fill="#F2C855" d="m10.009 11.249.555-3.618h-3.47V5.284c0-.99.484-1.955 2.04-1.955h1.577V.244S9.28 0 7.907 0c-2.858 0-4.73 1.733-4.73 4.871v2.76H0v3.618h3.178V20h3.91v-8.751h2.92Z"/>
                </svg>
              </a>
              <a href="#youtube" class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" fill="none" viewBox="0 0 18 14">
                  <path fill="#F2C855" d="m9.37 13.043-3.6-.066c-1.166-.023-2.334.023-3.477-.215C.554 12.407.43 10.666.303 9.205a24.955 24.955 0 0 1 .225-6.181c.19-1.143.934-1.825 2.086-1.899C6.5.855 10.413.888 14.29 1.013c.41.012.822.075 1.226.147 1.994.349 2.042 2.322 2.172 3.984a22.587 22.587 0 0 1-.172 5.032c-.198 1.38-.576 2.538-2.172 2.65-2 .146-3.953.263-5.957.226 0-.009-.012-.009-.018-.009ZM7.254 9.55c1.506-.865 2.984-1.716 4.482-2.575-1.51-.865-2.984-1.716-4.482-2.575v5.15Z"/>
                </svg>
              </a>
            </div>
          </div>


        </section>
      </footer>
</body>
</html>
