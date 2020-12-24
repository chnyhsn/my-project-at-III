module.exports = {
  env: {
    browser: true,
    es2021: true,
  },
  extends: [
    'airbnb-base',
  ],
  parserOptions: {
    ecmaVersion: 12,
    sourceType: 'module',
  },
  rules: {
    'no-unused-vars': 'off',
    'no-console': 'off',
    'no-const-assign': 'off',
    'arrow-body-style': ['error', 'always'],
    'max-len': ['error', { code: 110 }],
  },
};
