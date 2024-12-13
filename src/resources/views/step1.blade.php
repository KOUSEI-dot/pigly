<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>新規会員登録</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/step1.css') }}" />
</head>

<body>
  <header class="header"></header>
  <div class="form-container">
    <form class="form" action="{{ route('step2') }}" method="post">
      @csrf
      <main>
        <div class="register-form__content">
          <div class="register-form__heading">
            <div class="register-form__heading_first">PiGly</div>
            <div class="register-form__heading_second">新規会員登録</div>
            <p>STEP1 アカウント情報の登録</p>
          </div>

          <!-- 名前入力 -->
          <div class="form__group">
            <div class="form__group-title">
              <label for="name" class="form__label--item">お名前</label>
            </div>
            <div class="form__group-content">
              <div class="form__input--text">
                <input id="name" type="text" name="name" placeholder="名前を入力" value="{{ old('name') }}" required />
              </div>
              <div class="form__error">
                @error('name') <span>{{ $message }}</span> @enderror
              </div>
            </div>
          </div>

          <!-- メールアドレス入力 -->
          <div class="form__group">
            <div class="form__group-title">
              <label for="email" class="form__label--item">メールアドレス</label>
            </div>
            <div class="form__group-content">
              <div class="form__input--text">
                <input id="email" type="email" name="email" placeholder="メールアドレスを入力" value="{{ old('email') }}" required />
              </div>
              <div class="form__error">
                @error('email') <span>{{ $message }}</span> @enderror
              </div>
            </div>
          </div>

          <!-- パスワード入力 -->
          <div class="form__group">
            <div class="form__group-title">
              <label for="password" class="form__label--item">パスワード</label>
            </div>
            <div class="form__group-content">
              <div class="form__input--text">
                <input id="password" type="password" name="password" placeholder="パスワードを入力 (8文字以上)" required />
              </div>
              <div class="form__error">
                @error('password') <span>{{ $message }}</span> @enderror
              </div>
            </div>
          </div>

          <!-- 次に進むボタン -->
          <div class="form__button">
            <button class="form__button-submit" type="submit">次に進む</button>
          </div>
        </div>
      </main>
    </form>

    <!-- ログインリンク -->
    <div class="login-form">
      <a href="{{ route('login') }}">ログインはこちら</a>
    </div>
  </div>
</body>

</html>
