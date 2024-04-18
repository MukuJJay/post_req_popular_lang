class PagesController < ApplicationController

  def home
    name = 'mukul'
    code = 'ba5e3f51a592e97df7ad94b2c1cd68fd'

    url = 'https://dev.29kreativ.com/recruitment/levels/'
    headers = {
      'Authorization' => "Bearer ba5e3f51a592e97df7ad94b2c1cd68fd"
    }
    data = { name: name, code: code }

    response = HTTParty.post(url, body: data.to_param, headers: headers)

    @result = response.body
    render :home
  end
end