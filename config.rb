# 환경변수
# - 로컬    :development
# - 배포버전 :production

environment = :development
# environment = :production

# 경로 설정
# - config.rb 파일의 위치를 기준으로 상대경로

css_dir = "src/css"
sass_dir = "src/scss"
images_dir = "src/im"
javascripts_dir = "src/js"


# 스프라이트 이미지 경로
# - 로컬 버전인경우 css상에 표시될 이미지의 상대경로
# - 배포버전인경우 cdn url 
http_generated_images_path = (environment == :development) ? "../im" : "img/sp/"


# css 생성시 코드 스타일 지정
output_style = (environment == :development) ? :nested : :compressed

# 디버깅 옵션
# debug = (environment == :development) ? true : false



# To disable debugging comments that display the original location of your selectors. Uncomment:
#line_comments = false



# smart layout에 spacing을 지정하기 위한 루비코드 override
# - 수정하지 마세요!
module Compass::SassExtensions::Sprites
	module LayoutMethods
	    def compute_image_positions!
	      case layout
	      when SMART
	        @images, @width, @height = Layout::Smart.new(@images, @kwargs).properties
	      when DIAGONAL
	        require 'compass/sass_extensions/sprites/layout/diagonal'
	        @images, @width, @height = Layout::Diagonal.new(@images, @kwargs).properties
	      when HORIZONTAL
	        require 'compass/sass_extensions/sprites/layout/horizontal'
	        @images, @width, @height = Layout::Horizontal.new(@images, @kwargs).properties
	      else
	        require 'compass/sass_extensions/sprites/layout/vertical'
	        @images, @width, @height = Layout::Vertical.new(@images, @kwargs).properties
	      end
	    end	    
	end
	
	module Layout	
		class Smart < SpriteLayout

          def layout!
            calculate_positions!
          end

        private # ===========================================================================================>

          def calculate_positions!
            fitter = ::Compass::SassExtensions::Sprites::RowFitter.new(@images)
			current_y = 0
			width = 0
			height = 0
			last_row_spacing = 9999
			fitter.fit!.each do |row|
				current_x = 0
				row_height = 0
				row.images.each_with_index do |image, index|
					extra_y = [image.spacing - last_row_spacing, 0].max
					if index > 0
						last_image = row.images[index-1]
						current_x += [image.spacing, last_image.spacing].max
					end
					image.left = current_x
					image.top = current_y + extra_y
					current_x += image.width
					width = [width, current_x].max
					row_height = [row_height, extra_y + image.height+image.spacing].max
				end
				current_y += row.height
				height = [height, current_y].max
				last_row_spacing = row_height - row.height
				current_y += last_row_spacing
			end
			@width = width
			@height = height
          end

        end
    end
end

