# Contributing Guidelines

## Purpose of This Document
This document outlines the best practices for contributing to the project. It ensures that our commit messages are clear, consistent, and informative for the entire team. Following these guidelines will help maintain a clean and well-documented codebase.

## Branching Strategy
- `main`: Stable production-ready code.
- `dev`: Active development, features merged here before `main`.
- `feature/*`: Feature branches for new functionality (e.g., `feature/login`).

## Commit Message Guidelines
We follow a structured commit message format to ensure clarity and maintainability. Please use the following convention:

### Commit Message Format


### Why Commit Message Formatting Matters
- **Improves readability**: A clear commit history makes it easier to track changes.
- **Facilitates collaboration**: Other team members can quickly understand your changes.
- **Enhances automation**: Proper formatting allows tools to generate changelogs and reports efficiently.

### Types of Commits
| Type       | Meaning                                   |
|------------|-------------------------------------------|
| `feat`     | Adding a new feature                     |
| `fix`      | Fixing a bug                             |
| `refactor` | Code improvement without changing functionality |
| `docs`     | Documentation updates                   |
| `test`     | Adding or improving tests               |
| `chore`    | Maintenance tasks (e.g., dependency updates) |

### Examples

#### Feature Implementation
- feat(auth): Implement user login with token generation

#### Bug Fix
- fix(auth): Resolve incorrect status code on validation failure

#### Documentation Update
- docs(README.md): Update project description and installation instructions

## How to Write Good Commit Messages
- Keep the **first line under 72 characters**  
- Use **imperative mood** ("Add feature", not "Added feature")  


