# GCSS Framework

A lightweight CSS framework created by @chrisgab in 2025. GCSS provides a comprehensive set of utility classes for building responsive web interfaces.

## Overview

GCSS is a utility-first CSS framework that maps CSS rules to classnames with a consistent naming convention. Key features include:

- Custom CSS reset
- Responsive design with screen-size specific classes
- CSS variables for consistent styling
- Shorthand classes for common UI components
- Intuitive naming convention with prefixes

## File Structure

- **g.css** - Main CSS file with utility classes
- **gvars.css** - CSS variables for colors, spacing, sizing, etc.
- **greset.css** - CSS reset rules
- **gtags.css** - CSS rules for HTML tags
- **gl.css** - Large screen specific styles (min-width: 1080px)
- **gs.css** - Small screen specific styles (max-width: 1080px)
- **Css.php** - PHP handler for combining and serving CSS files
- **Shorts.php** - PHP handler for shorthand class combinations
- **config.php** - Configuration for routing and handlers

## Class Naming Convention

Classes in GCSS follow a consistent naming pattern:

- **Prefix**: `g-` for all screens, `gl-` for large screens, `gs-` for small screens
- **Property**: First letter abbreviation of CSS property (p=padding, m=margin, w=width, d=display, t=text, b=border, etc.)
- **Value**: Numeric or descriptive value

For example:
- `g-p1` - Padding level 1 (--r-p1) on all screens
- `gl-fr` - Flex row layout on large screens
- `gs-dn` - Display none on small screens

### Negative Classes

GCSS uses negative classes to remove specific properties. For example:
- `g-b` adds a border
- `g-bb` removes the bottom border

## Common UI Components

GCSS provides shorthand classes for common UI components through the Shorts.php handler:

```
g-box         -> g-b g-p1
g-box-round   -> g-b g-btr g-bbr g-p1
g-box-head    -> g-b g-bb g-btr g-p1
g-box-body    -> g-b g-bb g-p1
g-box-foot    -> g-b g-bbr g-p1 g-tjcb
g-container   -> gl-fr g-fw
g-row         -> g-fw gl-fr g-tjcb g-bbr g-btr g-b g-p1 g-ph g-mhc g-phc
g-button      -> g-tusn g-b g-btr g-bbr g-p1 g-fwm
```

## Responsive Design

GCSS handles responsive design through screen-specific prefixes:

- `g-` classes apply to all screen sizes
- `gl-` classes only apply to large screens (min-width: 1080px)
- `gs-` classes only apply to small screens (max-width: 1080px)

CSS variables are automatically adjusted based on screen size.

## Usage

To use GCSS in your project:

1. Include the CSS via the handler:
   ```html
   <link rel="stylesheet" href="g.css">
   ```

2. For minimal reset (without greset.css):
   ```html
   <link rel="stylesheet" href="g-min.css">
   ```

3. Apply classes to your HTML elements:
   ```html
   <div class="g-box">
     <div class="g-box-head">Header</div>
     <div class="g-box-body">Content</div>
     <div class="g-box-foot">Footer</div>
   </div>
   ```

## Todo

- Create a new example UI with all elements

## License

Created by @chrisgab 2025
