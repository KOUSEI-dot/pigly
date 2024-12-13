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
          <p>STEP2 体重データの入力</p>
        </div>
          <div class="form__group">
            <div class="form__group-title">
              <label for="name" class="form__label--item">現在の体重</label>
            </div>
            <div class="form__group-content">
              <div class="form__input--text">
                <input id="name" type="text" name="name" placeholder="現在の体重を入力" value="{{ old('name') }}" required />
              </div>
              <div class="form__error">
                @error('name') <span>{{ $message }}</span> @enderror
              </div>
            </div>
          </div>
          <div class="form__group">
            <div class="form__group-title">
              <label for="email" class="form__label--item">目標の体重</label>
            </div>
            <div class="form__group-content">
              <div class="form__input--text">
                <input id="email" type="email" name="email" placeholder="目標の体重を入力" value="{{ old('email') }}" required />
              </div>
              <div class="form__error">
                @error('email') <span>{{ $message }}</span> @enderror
              </div>
            </div>
          </div>

          <div class="form__button">
            <button class="form__button-submit" type="submit">アカウント作成</button>
          </div>
        </form>
        </div>
      </div>
    </main>
  </div>
</body>

</html>
