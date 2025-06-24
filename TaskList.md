# Laravel + Vue + Inertia + TypeScript 프로젝트

## TypeScript 연동 작업 완료 ✅

### 설치된 패키지
- [x] `typescript` - TypeScript 컴파일러
- [x] `ts-loader` - TypeScript 로더
- [x] `@types/node` - Node.js 타입 정의

### 완료된 작업
- [x] **TypeScript 초기화**: `npx tsc --init` 실행
- [x] **app.js → app.ts 변환**: 메인 애플리케이션 파일을 TypeScript로 변경
- [x] **Vite 설정 업데이트**: `vite.config.ts`에서 TypeScript 지원 활성화
- [x] **tsconfig.json 최적화**: Vue 3와 Inertia에 맞는 설정으로 조정
- [x] **Vue 컴포넌트 TypeScript 지원**: 모든 Vue 컴포넌트에 `<script setup lang="ts">` 추가
- [x] **경로 별칭 설정**: `@` 별칭을 `resources/js`로 설정

### 주요 변경사항

#### 1. 파일 구조 변경
```
resources/js/
├── app.ts (기존 app.js에서 변경)
├── Pages/
│   ├── Dashboard/Index.vue (TypeScript 지원 추가)
│   └── Settings/Index.vue (TypeScript 지원 추가)
```

#### 2. 설정 파일 업데이트
- `vite.config.ts`: TypeScript 입력 파일로 변경, 경로 별칭 추가
- `tsconfig.json`: Vue 3, Inertia 최적화 설정 추가

#### 3. TypeScript 기능
- Vue 컴포넌트에서 타입 안전성 제공
- 자동 완성 및 IntelliSense 지원
- 컴파일 타임 에러 검출

### CSS 린트 오류 해결 (추가 작업)
- [x] **VS Code 설정**: `.vscode/settings.json`에서 CSS 알 수 없는 at-rules 무시 설정
- [x] **CSS 커스텀 데이터**: `.vscode/css_custom_data.json`에서 Tailwind CSS v4 at-rules 정의
- [x] **Tailwind CSS v4 지원**: `@custom-variant`, `@source`, `@theme`, `@apply` 규칙 인식

### Dependencies 최신 버전 확인
- [x] **패키지 업데이트 확인**: 모든 dependencies가 이미 최신 버전으로 설치됨
- [x] **버전 검증**: npm을 통해 최신 버전 상태 확인 완료

### 개발 서버 실행
```bash
npm run dev
```

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
