Content files correspond to template files as long as their names are identical.
Blueprint files administer content folders

Page assets can link to a blueprint by defining it via Template within the asset.jpg.txt metadata file
You can also hardcode a file template in the asset upload for a page blueprint
Example: blueprints/pages/project.yml > template: gallery-image where blueprints/files/gallery-image.yml
This forces a "Template: gallery-image" field in the content page folder within the [asset-name].[asset-ext].txt file
You can only have one template per asset upload in the page blueprint
